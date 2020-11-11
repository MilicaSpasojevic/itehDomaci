<?php
    include 'model.php';

    $edit_id=$_POST['edit_id'];

    $model = new Model();

    $row =  $model->edit($edit_id);

    if(!empty($row)){
        ?>

<form action="" method="post" id="form">

    <div>
    <input type="hidden" id="edit_id" value="<?php echo $row['idRadnje'];?>"></div>

    <div class="form-group">
        <label for="">Naziv radnje</label>
        <input type="text" id="edit_naziv" class="form-control" value="<?php echo $row['nazivRadnje']?>">
    </div>

    <div class="form-group">
        <label for="">Opis</label>
        <textarea name="decription" id="edit_opis" cols="" rows="3" class="form-control"><?php echo $row['opis']?></textarea>
    </div>

</form>


<?php
    }




?>