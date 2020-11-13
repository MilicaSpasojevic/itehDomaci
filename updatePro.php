<?php
    include 'model.php';

        //proveravamo da li je korisnik kliknuo na dugme update u okviru forme
        if(isset($_POST['updatePro'])){
            
            if(isset($_POST['edit_nazivPro']) && isset($_POST['edit_cena']) && isset($_POST['edit_velicina']) && isset($_POST['edit_idPro'])){

                if(!empty($_POST['edit_nazivPro']) && !empty($_POST['edit_cena']) && !empty($_POST['edit_velicina'])  && !empty($_POST['edit_idPro'])){

                    $data['edit_nazivPro'] = $_POST['edit_nazivPro'];
                    $data['edit_cena'] = $_POST['edit_cena'];
                    $data['edit_velicina'] = $_POST['edit_velicina'];
                    $data['edit_idPro']= $_POST['edit_idPro'];
                    

                    $model = new Model();

                    $update = $model->updatePro($data);

                    
                    

                   
                } else {
                    echo "
                    <script>alert('Prazna polja');</script>
                    ";
                }
            }
        }
    




?>