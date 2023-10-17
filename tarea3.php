<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
    
    <title>Tarea 3</title>
  
</head>
<body>
   <div class="container text-center">
  <div class="row">
      <div class="col">        
        <div class="calculo">
          <div class="mb-3">            

            <form  method="POST">     
            <label for="e">Ingrese la edad de su perro</label>         
            <input type="number" class="form-control mt-2"name="e">
            <br>
            <input type="submit" class="btn btn-primary mt-1" name="submit" value="Calcular">
              <p>              
              <?php include("codigo.php");

                $edad = new Edad_Perro();

                if(isset($_POST["submit"]) && !empty($_POST["submit"])) 
                {
                  $e = $_POST["e"];
                  $edad->set_edad($e);

                  echo "<b>Su mascota tiene ".$edad->calcular_edad()." años en edad canina</b>";
                }         

              ?> 
              </p> 
            </form>             
          </div> 
        </div>    
      </div>
  </div>
</body>
</html>
