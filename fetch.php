<?php
    include 'model.php';

    $model=new Model();

    $rows = $model->fetch();

?>


<table class="table">
    <thead class="thead-light">
        <tr>
            <th>REDNI BROJ</th>
            <th>NAZIV RADNJE</th>
            <th>OPIS</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
            $i=1;
            if(!empty($rows)){
                foreach($rows as $row){ ?>

        <tr> 
            <td><?php echo $i++;?></td>
            <td><?php echo $row['nazivRadnje'];?></td>
            <td><?php echo $row['opis']?></td>
            <td>
                <a href="#" id="del" class="badge badge-danger" value="<?php echo $row['idRadnje'];?>"> Delete</a>
                <a href="#" id="edit" class="badge badge-success" value="<?php echo $row['idRadnje'];?>" data-toggle="modal" data-target="#exampleModal1">Edit</a>
            </td>

        </tr>
        <?php
                }
            } else {
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                 No data
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
                ";
            }

            ?>



    </tbody>

</table>