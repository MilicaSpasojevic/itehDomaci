<?php
    include 'model.php';

        //proveravamo da li je korisnik kliknuo na dugme submit u okviru forme
        if(isset($_POST['updatePro'])){
            
             //proveravamo da li je korisnik kuneo podatke u title i description u okviru forme
            if(isset($_POST['edit_nazivPro']) && isset($_POST['edit_cena']) && isset($_POST['edit_velicina']) && isset($_POST['edit_idPro'])){

                //ukoliko polja nisu prazna pamtimo u okviru varijabli title i description, preko superglobalne promenljive POST ono sta je korisnik uneo
                if(!empty($_POST['edit_nazivPro']) && !empty($_POST['edit_cena']) && !empty($_POST['edit_velicina'])  && !empty($_POST['edit_idPro'])){

                    $data['edit_nazivPro'] = $_POST['edit_nazivPro'];
                    $data['edit_cena'] = $_POST['edit_cena'];
                    $data['edit_velicina'] = $_POST['edit_velicina'];
                    $data['edit_idPro']= $_POST['edit_idPro'];
                    

                    $model = new Model();

                    $update = $model->updatePro($data);

                    
                    

                   
                } else {
                    echo "
                    <script>alert('empty filleds');</script>
                    ";
                }
            }
        }
    




?>