<?php
    include 'model.php';

    $model = new Model();

    $opcije = $model->fetch();



?>

<select class="custom-select my-1 mr-sm-2" id="select">
                    <option id="nazivIzabrane" selected>Izaberi zaru</option>

                    <?php
                 $i=1;
                if(!empty($opcije)){
                foreach($opcije as $op){ ?>



                    <option value=<?php echo $op['idRadnje']?>><?php echo $op['nazivRadnje'];?></option>



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
</select>