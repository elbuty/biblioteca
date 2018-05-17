<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/styles.css">
  <title>Bilioteca Virtual</title>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
  <?php include("header.php");?>
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-12 mas-margen-inferior">
          <form id="libro" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input id="isbn" class="form-control" type="text" name="isbn">
            </div>
            <div class="form-group">
              <label for="titulo">Título</label>
              <input id="titulo" class="form-control" type="text" name="titulo">
            </div>
            <div class="form-group">
              <label for="anno_publicacion">Año de publicación</label>
              <input id="anno_publicacion" class="form-control" type="date" name="anno_publicacion">
            </div>
            <div class="form-group">
              <label for="cod_editorial">Código de la Editorial</label>
              <input id="cod_editorial" class="form-control" type="text" name="cod_editorial">
            </div>
            <div class="form-group">
              <label for="anno_edicion">Año de Edición</label>
              <input id="anno_edicion" class="form-control" type="date" name="anno_edicion">
            </div>

            <input id= "agregar" class="btn btn-primary" type="button" value="Agregar">
          </form>
        </div>
            <div class="row">
              <div class="col-12" id="resultados">

              </div>
            </div>
        </div>
      </div>
  </section>
  <script>
    //Funciones
    function registro(){
      //$("#resultados").html($("#registro").serialize());
      var formulario = new FormData(document.getElementById("libro"));
      $.ajax({
        url: "registrarLibro.php",
        type: "post",
        data: formulario,
        contentType: false,
        processData: false,
        //El servidor respondio
        success: function(data){
          $("#resultados").html(data);
        },
        //El servidor no respondio
        error: function(){
          $("#resultados").html("Servidor no esta");
        }
      })

    }
    //Función leerLibro
    function leerLibro(){
      $.ajax({
        url: "leerLibro.php",
        type: "post",
        data: $("#filtro").serialize(),
        //El servidor respondio
        success: function(data){
          $("#resultados").html(data);
        },
        //El servidor no respondio
        error: function(){
          $("#resultados").html("Servidor no esta");
        }
      })
    }

    //Eventos
    $("#agregar").on("click",function(event){
      //event.preventDefault();
      //Detengo el por defecto
      registro();
    })
    $("#leerLibro").click(leerLibro);
  </script>
</body>
</html>
