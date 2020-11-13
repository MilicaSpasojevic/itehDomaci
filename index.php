<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="logo.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>ZARA</title>
</head>

<body style="">
    <div class="container" >
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">DEKLARACIJA NOVIH PROIZVODA U ZARI</h1>
                <hr style="height: 1px; color: black; background-color: black">


            </div>

        </div>

        <div class="row">
            <div class="col-md-5 mx-auto">

                <form action="" method="post" id="form">

                    <div id="result"></div>

                    <div class="form-group">
                        <label for="">Naziv radnje</label>
                        <input type="text" id="nazivRadnje" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Opis</label>
                        <textarea name="opis" id="opis" cols="" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" id="submit" class="btn btn-outline-primary">Dodaj</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mt-1">
                <div id="show"></div>
                <div id="fetch"></div>


            </div>
        </div>






        <div class="row">
        <div class="col-md-20 mx-auto" style="margin-top: 25px; margin-bottom: 25px">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center" style="font-size:20px; color:grey">DODAJ PROIZVOD U RADNJU</h1>
                <hr style="height: 0.5px; color: grey; background-color: grey">


            </div>

        </div>
            <form class="form-inline">

            

            <div id="opcije"></div>
               <!-- <select class="custom-select my-1 mr-sm-2" id="select">
                    <option selected>Izaberi zaru</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>-->

                <div style="margin-top: 7px">
                    <label class="sr-only" for="inlineFormInputName2">Naziv proizvoda</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="naziv"
                        placeholder="Naziv proizvoda">

                    <label class="sr-only" for="inlineFormInputName2">Velicina</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="velicina"
                        placeholder="Velicina">

                        <label class="sr-only" for="inlineFormInputName2">Cena</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="cena"
                        placeholder="Cena">

                </div>


                <button type="dodaj" id="dodaj" class="btn btn-primary my-1">Dodaj proizvod</button>
            </form>
            <div id="resultPro"></div>

        </div class="row">
    </div class="col-md-8 mx-auto">

    <div class="row">
            <div class="col-md-12 mt-1" style="margin-bottom: 50px">
                <div id="showPro"></div>
                <div id="fetchPro"></div>
                <label class="sr-only" for="inlineFormInputName2" >Pretrazi</label>
                    <input type="text" class="form-control mb-2" id="pretrazi" placeholder="Pretrazi">

            </div>
        </div>

    </div>









    <!-- Edit Radnja -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Izmeni radnju</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="edit_data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="update">Update</button>
                </div>
            </div>
        </div>
    </div>

        <!-- Edit Proizvod -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Izmeni proizvod</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <div id="edit_dataP"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="updatePro">Update</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-replace-svg="nest"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->




    <!-- -->
    <!--Pomocu jqueryja uzimamo podatke od korisnika nakon sto je uneo u formu
    zatim, te podatke prosledjujemo serveru, u nasem slucaju prosledujemo url na insert.php i njemu prosledjujemo naziv,opis i submit, kao podatke, 
    dalje, server tim podacima pristupa preko 'nazivRadnje', 'opis' i 'submit' preko superglobalne promenljive post (jer smo u ajaxu stavili da je type post-->
    <script>
    $(document).on("click", "#submit", function(e) {
        e.preventDefault();

        var nazivRadnje = $("#nazivRadnje").val();
        var opis = $("#opis").val();
        var submit = $("#submit").val();


        /*AJAX is a developer's dream, because you can:

Update a web page without reloading the page
Request data from a server - after the page has loaded
Receive data from a server - after the page has loaded
Send data to a server - in the background*/



        $.ajax({
            url: "insert.php",
            type: "post",
            data: {
                nazivRadnje: nazivRadnje,
                opis: opis,
                submit: submit
            },
            success: function(data) {
               fetch();
                $("#result").html(data);
                console.log(data);
            }
        });



        $('#form')[0].reset();
    });


    //Fetch radnje
    function fetch() {
        $.ajax({
            url: "fetch.php",
            type: "post",
            success: function(data) {
                $("#fetch").html(data);
            }
        })
    }

    fetch();


        //Opcije
        function opcije() {
        $.ajax({
            url: "izlistajOpcije.php",
            type: "post",
            success: function(data) {
                $("#opcije").html(data);
            }
        })
    }

    opcije();

    //Delete radnja

    $(document).on("click", "#del", function(e) {
        e.preventDefault();
        //attr- returns attributes and values of the selected elements, u nasem slucaju this se odnosi na del dugme iz fetch-a

        if (window.confirm("Da li zaista zelite da izbrisete radnju?")) {

            var del_id = $(this).attr("value");
            console.log(del_id)

            $.ajax({
                url: "del.php",
                type: "post",
                data: {
                    del_id: del_id
                },
                success: function(data) {
                    fetch();
                    $("#show").html(data);
                }
            })
        } else {
            return false;
        }

    });




    //Edit radnja
    $(document).on("click", "#edit", function(e) {
        e.preventDefault();

        var edit_id = $(this).attr("value");

        console.log(edit_id);


        $.ajax({
            url: "edit.php",
            type: "post",
            data: {
                edit_id: edit_id
            },
            success: function(data) {

                $("#edit_data").html(data);
            }
        })
    })

        //Edit proizvod
        $(document).on("click", "#editPro", function(e) {
        e.preventDefault();

        var edit_id = $(this).attr("value");

        console.log(edit_id);


        $.ajax({
            url: "editPro.php",
            type: "post",
            data: {
                edit_id: edit_id
            },
            success: function(data) {
                console.log(data);
                $("#edit_dataP").html(data);
            }
        })
    })


    //Update proizvod

    $(document).on("click", "#updatePro", function(e) {
        e.preventDefault();

        var edit_nazivPro = $("#edit_nazivPr").val();
        var edit_velicina = $("#edit_velicina").val();
        var edit_cena = $("#edit_cena").val();
        var updatePro = $("#updatePro").val();
        var edit_idPro = $("#edit_idPro").val();

        $.ajax({
            url: "updatePro.php",
            type: "post",
            data: {
                edit_idPro: edit_idPro,
                edit_nazivPro: edit_nazivPro,
                edit_cena:edit_cena,
                edit_velicina:edit_velicina,
                updatePro: updatePro
            },
            success: function(data) {
                fetchPro();
                $("#showPro").html(data);
            }

        })
    })

        //Update radnja

        $(document).on("click", "#update", function(e) {
        e.preventDefault();

        var edit_naziv = $("#edit_naziv").val();
        var edit_opis = $("#edit_opis").val();
        var update = $("#update").val();
        var edit_id = $("#edit_id").val();

        $.ajax({
            url: "update.php",
            type: "post",
            data: {
                edit_id: edit_id,
                edit_naziv: edit_naziv,
                update: update,
                edit_opis: edit_opis
            },
            success: function(data) {
                fetch();
                fetchPro();
                $("#show").html(data);
            }

        })
    })


    //Insert proizvod

    $(document).on("click", "#dodaj", function(e){
        e.preventDefault();

        var naziv_proizvoda = $("#naziv").val();
        var velicina = $("#velicina").val();
        var cena = $("#cena").val();
        var idRad = $("#select").val();
        var dodaj = $("#dodaj").val();


        $.ajax({
            url: "insertPr.php",
            type: "post",
            data: {
                naziv_proizvoda: naziv_proizvoda,
                velicina: velicina,
                cena: cena,
                idRad: idRad,
                dodaj: dodaj
            },
            success: function(data){
                fetchPro();
                $("#resultPro").html(data);

            }
        })
    } )

        //Fetch Proizvodi
        function fetchPro() {
        $.ajax({
            url: "fetchPro.php",
            type: "post",
            success: function(data) {
                $("#fetchPro").html(data);
            }
        })
    }

    fetchPro();



        //Delete proizvod

        $(document).on("click", "#delPro", function(e) {
        e.preventDefault();
        //attr- returns attributes and values of the selected elements, u nasem slucaju this se odnosi na del dugme iz fetch-a

        if (window.confirm("Da li zaista zelite da obrisete proizvod?")) {

            var del_id = $(this).attr("value");

            $.ajax({
                url: "delPro.php",
                type: "post",
                data: {
                    del_id: del_id
                },
                success: function(data) {
                    fetchPro();
                    $("#showPro").html(data);
                }
            })
        } else {
            return false;
        }

    });


    //sortiranje po ceni
    $(document).on("click", "#cenaOrd", function(e){
        e.preventDefault();

        var cenaOrd = $(this).val();
        
        $.ajax({
            url: "fetchPro.php",
            type: "post",
            data: {
                cenaOrd:cenaOrd
            },
            success: function(data){
                $("#fetchPro").html(data);
            }
        })


    })


    //pretraga po zari
    $(document).ready(function(){
    $("#pretrazi").on("keyup", function() {
      let pret = $(this).val().toLowerCase();
      console.log(pret);
      
      $.ajax({
          url: "fetchPro.php",
          type: "post",
          data: {
            pret: pret
          },
          success:function(data){
                $("#fetchPro").html(data);
            } 
      })
     
    });
  });

   /* //pretraga po zari
    $(document).on("click","#pretrazi", function(e){
        e.preventDefault();

        var pretrazi = $(this).val();

        $.ajax({
            url: "pretraga.php",
            type: "post",
            data: {
                pretrazi:pretrazi
            },
            success: function(data){
                $("#fetchPro").html(data);
            }
        })
    })*/

    </script>
</body>

</html>