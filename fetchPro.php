<?php
    include 'model.php';

    $model=new Model();



    $rows = $model->pretraga();

?>


<table class="table table-striped">
    <thead class="thead-light">
        <tr>
            <th>NAZIV RADNJE</th>
            <th>NAZIV PROIZOVDA</th>
            <th>VELICINA</th>
            <th><a class="column-sort" id="cenaOrd" data-order="desc" href="#"><i class="fas fa-sort-amount-down-alt"></i></a> CENA U RSD</th>
            <?php
                 if(isset($_POST['cenaOrd'])){
                  
                   $rows=$model->sort();
                   
                   
                
                }
                 
            
            ?>
            <th></th>
        </tr>
    </thead>

    <tbody>
        <?php
            $i=1;
            if(!empty($rows)){
                foreach($rows as $row){
                    
                $zara = $model->vratiZaru($row['idRadnje']);?>

        <tr> 
            <td><?php echo $zara['nazivRadnje'];?></td>
            <td><?php echo $row['nazivProizvoda'];?></td>
            <td><?php echo $row['velicina']?></td>
            <td><?php echo $row['cena']?></td>
            <td>
                <a href="#" id="delPro" class="badge badge-danger" value="<?php echo $row['idProizvoda'];?>"> Delete</a>
                <a href="#" id="editPro" class="badge badge-success" value="<?php echo $row['idProizvoda'];?>" data-toggle="modal" data-target="#exampleModal2">Edit</a>
                    
            </td>

        </tr>
        <?php
                }
            } else {
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                 Nema podataka o proizvodima!
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>
                ";
            }

            ?>



    </tbody>

</table>