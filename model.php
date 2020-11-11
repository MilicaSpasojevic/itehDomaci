<?php


    /*pravimo nasu klasu model u okviru koje se povezujemo na server i bazu podataka
    this nam se odnosi na konkretan objekat te klase, preko -> pristupamo propertijima klase Model*/ 

    Class Model{
        private $server = "localhost";
        private $username="root";
        private $password="";
        private $db="zara";
        private $conn;


        //konstruktor se uvek pise sa dve donje crte
        //sluzi nam da za konkretnu instancu klase definisemo odredjene propertije, unasem slucaju svaki put kada kreiramo objekat klase model 
        //mi cemo dodeliti propertiju conn konkretnu vrednost, i to interfejs PDO koji nam sluzi za povezivanje sa bazom podataka
        //PDO (PHP Data Objects)
        public function __construct(){
            try{
                $this->conn= new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);
            }catch(PDOException $e){
                echo "connection failed" . $e->getMessage();
            }
        }


        /*Some predefined variables in PHP are "superglobals", 
        which means that they are always accessible, regardless of scope - and you can access them from any function, 
        class or file without having to do anything special.
        
        u nasem slucaju POST*/ 

        /*PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". 
        $_POST is also widely used to pass variables.*/ 

        /*When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag.*/
        
        //funkcija pomocu koje cemo da stavljamo podatke u bazu CRUD - CREATE(INSERT)
        
        public function insert(){
            //proveravamo da li je korisnik kliknuo na dugme submit u okviru forme
            if(isset($_POST['submit'])){
                
                 //proveravamo da li je korisnik kuneo podatke u title i description u okviru forme
                if(isset($_POST['nazivRadnje']) && isset($_POST['opis'])){

                    //ukoliko polja nisu prazna pamtimo u okviru varijabli title i description, preko superglobalne promenljive POST ono sta je korisnik uneo
                    if(!empty($_POST['nazivRadnje']) && !empty($_POST['opis'])){
                        $nazivRadnje = $_POST['nazivRadnje'];
                        $opis = $_POST['opis'];

                        
                        
                        //pisemo sql upit koji dodeljnujemo varijabli query, koju dalje prosledjujemo kao paramer funkcije exec koja pokrece upit
                        $query = "INSERT INTO radnja (nazivRadnje, opis) VALUES ('$nazivRadnje', '$opis')";
                        if($sql = $this->conn->exec($query)){
                            echo "
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            Record added successfully
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>            
                            ";
                        }else {
                            echo "
                            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            failed to add record
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                              <span aria-hidden='true'>&times;</span>
                            </button>
                          </div>
                            ";
                        }
                    } else {
                        echo "
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        empty fields
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>
                        ";
                    }
                }
            }
        }

        public function fetch(){
            $data= null;
            //A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
            $stmt = $this->conn->prepare("SELECT * FROM radnja");

            $stmt->execute();

            $data = $stmt->fetchAll();

            return $data;
        }


        //funkcija za brisanje, prima kao parametar id stavke koju zelimo da obrisemo
        public function del($del_id){
            $query = "DELETE FROM radnja WHERE idRadnje= '$del_id' ";
            if($sql = $this->conn->exec($query)){
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Record deleted
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
                "; 
            } else {
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                eDelete failed
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
                ";
            }
        }


        //read
        public function read($read_id){
            $data = null;

            $stmt = $this->conn->prepare("SELECT * FROM records WHERE id='$read_id'");

            $stmt->execute();

            $data = $stmt->fetch();
            
            return $data;
        }


        //edit
        public function edit($edit_id){
            $data = null;
            $stmt = $this->conn->prepare("SELECT * FROM radnja WHERE idRadnje='$edit_id'");

            $stmt->execute();

            $data=$stmt->fetch();

            return $data;
        }
        //editPro
        public function editPro($edit_id){
          $data = null;
          $stmt = $this->conn->prepare("SELECT * FROM proizvod WHERE idProizvoda='$edit_id'");

          $stmt->execute();

          $data=$stmt->fetch();

          return $data;
      }

        //update
        public function update($data){
            $query="UPDATE radnja SET nazivRadnje='$data[edit_naziv]',opis='$data[edit_opis]' WHERE idRadnje='$data[edit_id]'";

            if($sql = $this->conn->exec($query)){
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Record updated successfully
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>            
                ";
            } else {
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                Update failed 
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>            
                ";

            };
        }
    
        //update Pro
        public function updatePro($data){
          $query="UPDATE proizvod SET nazivProizvoda='$data[edit_nazivPro]',velicina='$data[edit_velicina]',cena='$data[edit_cena]' WHERE idProizvoda='$data[edit_idPro]'";

          if($sql = $this->conn->exec($query)){
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              Record updated successfully
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>            
              ";
          } else {
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              Update failed 
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>            
              ";

          };
      }

    //INSERT PROIZVODA
    public function insertPr(){
      //proveravamo da li je korisnik kliknuo na dugme submit u okviru forme
      if(isset($_POST['dodaj'])){
          
           //proveravamo da li je korisnik kuneo podatke u title i description u okviru forme
          if(isset($_POST['naziv_proizvoda']) && isset($_POST['velicina']) && isset($_POST['cena']) && isset($_POST['idRad'])){

              //ukoliko polja nisu prazna pamtimo u okviru varijabli title i description, preko superglobalne promenljive POST ono sta je korisnik uneo
              if(!empty($_POST['naziv_proizvoda']) && !empty($_POST['velicina']) && !empty($_POST['cena']) && !empty($_POST['idRad'])){
                  $naziv_proizvoda = $_POST['naziv_proizvoda'];
                  $velicina = $_POST['velicina'];
                  $cena = $_POST['cena'];
                  $idRad = $_POST['idRad'];

                  
                  
                  //pisemo sql upit koji dodeljnujemo varijabli query, koju dalje prosledjujemo kao paramer funkcije exec koja pokrece upit
                  $query = "INSERT INTO proizvod (nazivProizvoda, velicina,cena,idRadnje) VALUES ('$naziv_proizvoda', '$velicina','$cena','$idRad')";
                  if($sql = $this->conn->exec($query)){
                      echo "
                      <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      Record added successfully
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>            
                      ";
                  }else {
                      echo "
                      <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      failed to add record
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                      ";
                  }
              } else {
                  echo "
                  <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  empty fields
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span>
                  </button>
                </div>
                  ";
              }
          }
      }
  }

  //fetch pro
  public function fetchPro(){
    $data= null;
    //A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
    $stmt = $this->conn->prepare("SELECT * FROM proizvod");

    $stmt->execute();

    $data = $stmt->fetchAll();

    return $data;
}

//vrati zaru

public function vratiZaru($zara_id){
  $data= null;
  //A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
  $stmt = $this->conn->prepare("SELECT * FROM radnja WHERE idRadnje='$zara_id'");

  $stmt->execute();

  $data = $stmt->fetch();

  return $data;
}

  //fpretraga po zari
  public function pretraga(){
    $data= null;
    if(!empty($_POST['pret'])){
    $imeR = $_POST['pret'];
    } else $imeR="";

    //A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
    $stmt = $this->conn->prepare("SELECT * FROM proizvod WHERE idRadnje in (SELECT idRadnje from radnja WHERE nazivRadnje LIKE '%$imeR%')");

    $stmt->execute();

    $data = $stmt->fetchAll();

    return $data;
}


        //funkcija za brisanje, prima kao parametar id stavke koju zelimo da obrisemo
        public function delPro($del_id){
          $query = "DELETE FROM proizvod WHERE idProizvoda= '$del_id' ";
          if($sql = $this->conn->exec($query)){
              echo "
              <div class='alert alert-success alert-dismissible fade show' role='alert'>
              Proizvod je obrisan!
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
              "; 
          } else {
              echo "
              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              Neuspesno brisanje proizvoda!
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
              ";
          }
      }

      //sortiranje po ceni
      public function sort(){
        if(isset($_POST['cenaOrd'])){
          $data= null;
          //A prepared statement is a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency.
          $stmt = $this->conn->prepare("SELECT * FROM proizvod ORDER BY cena asc");
      
          $stmt->execute();
      
          $data = $stmt->fetchAll();
      
          return $data;



        }

      }

};


?>