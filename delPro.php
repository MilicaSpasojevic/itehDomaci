<?php
    include 'model.php';

    $del_id=$_POST['del_id'];

    //instanca klase model koju koristimo za brisanje
    $model = new Model();

    //pozivamo funkciju delPro i prosledjujemo joj id
    $del = $model->delPro($del_id);


?>