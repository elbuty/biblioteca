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
          <form id="prestamo" method="post" enctype="multipart/form-data">

            <div class="form-group">
              <label for="cod_prestamo">Cod. Préstamo</label>
              <input id="cod_prestamo" class="form-control" type="text" name="cod_prestamo">
            </div>
            <div class="form-group">
              <label for="fecha_realizacion">Fecha de Realización</label>
              <input id="fecha_realizacion" class="form-control" type="date" name="fecha_realizacion">
            </div>
            <div class="form-group">
              <label for="fecha_devolucion">Fecha de Devolución</label>
              <input id="fecha_devolucion" class="form-control" type="date" name="fecha_devolucion">
            </div>
            <div class="form-group">
              <label for="cod_persona">Código de Persona</label>
              <input id="cod_persona" class="form-control" type="text" name="cod_persona">
            </div>
            <input id= "agregar" class="btn btn-primary" type="button" value="Agregar">
          </form>
        </div>
            <div class="row mas-margen-inferior">
              <div class="col-12">
                <input class="btn btn-primary"
                  id="leerPrestamo"
                  type="button"
                  value="Préstamos Realizados">
              </div>
            </div>
            <div class="row">
              <div class="col-12" id="resultados">

              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    //Funciones
    function registro(){
      //$("#resultados").html($("#registro").serialize());
      var formulario = new FormData(document.getElementById("prestamo"));
      $.ajax({
        url: "registrarPrestamo.php",
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
    //Función leerPrestamo
    function leerPrestamo(){
      $.ajax({
        url: "leerPrestamo.php",
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
    $("#leerPrestamo").click(leerPrestamo);
  </script>
</body>
</html>
