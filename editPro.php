<?php
    include 'model.php';

    $edit_id=$_POST['edit_id'];

    $model = new Model();

    $row =  $model->editPro($edit_id);

    if(!empty($row)){
        ?>

<form action="" method="post" id="form">

    <div>
    <input type="hidden" id="edit_idPro" value="<?php echo $row['idProizvoda'];?>"></div>

    <div class="form-group">
        <label for="">Naziv proizvoda</label>
        <input type="text" id="edit_nazivPr" class="form-control" value="<?php echo $row['nazivProizvoda']?>">
    </div>

    <div class="form-group">
        <label for="">Velicina</label>
        <textarea name="decription" id="edit_velicina" cols="" rows="3" class="form-control"><?php echo $row['velicina']?></textarea>
    </div>

    <div class="form-group">
        <label for="">Cena</label>
        <textarea name="decription" id="edit_cena" cols="" rows="3" class="form-control"><?php echo $row['cena']?></textarea>
    </div>

</form>


<?php
    }




?>