<?php
    include 'model.php';

        //proveravamo da li je korisnik kliknuo na dugme submit u okviru forme
        if(isset($_POST['update'])){
            
             //proveravamo da li je korisnik kuneo podatke u title i description u okviru forme
            if(isset($_POST['edit_naziv']) && isset($_POST['edit_opis']) && isset($_POST['edit_id'])){

                //ukoliko polja nisu prazna pamtimo u okviru varijabli title i description, preko superglobalne promenljive POST ono sta je korisnik uneo
                if(!empty($_POST['edit_naziv']) && !empty($_POST['edit_opis']) && !empty($_POST['edit_id'])){

                    $data['edit_naziv'] = $_POST['edit_naziv'];
                    $data['edit_opis'] = $_POST['edit_opis'];
                    $data['edit_id']= $_POST['edit_id'];
                    

                    $model = new Model();

                    $update = $model->update($data);

                    
                    

                   
                } else {
                    echo "
                    <script>alert('empty filleds');</script>
                    ";
                }
            }
        }
    




?>