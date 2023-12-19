<?php session_start(); 

/** Funciones */
$vistaRosources = "resources.views.producto";

#echo str_replace(".","/",$vistaRosources);

#echo str_repeat("controlador",2);

#echo ucwords("productoController");

#echo ltrim("mysql","m");

#echo file_exists("controlador.php") ? 'El controlador existe':'No existe';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="row m-2">
   <div class="col-xl-4 col-lg-4 col-md-6 col-12">
   <div class="card">
        <div class="card-body">
            <div class="card-text">
                <h4>Ejercicio 1</h4>
            </div>
            <?php if(isset($_SESSION['error'])): ?>
              <div class="alert alert-danger">
              <ul>
                <?php foreach($_SESSION['error'] as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>    
              </ul>
              </div>
            <?php unset($_SESSION["error"]); endif; ?>    

            <?php if(isset($_SESSION['success'])): ?>
              <div class="alert alert-success">
               <b><?php echo $_SESSION["success"] ?></b>
              </div>
            <?php unset($_SESSION["success"]); endif; ?>    
            <form action="controlador.php?accion=calcular_ejercicio1" method="post" id="form_ejercicio1">
              <div class="form-group">
                <label for="texto">Texto (*)</label>
                <input type="text" id="texto" name="texto" class="form-control">
              </div>  
              <div class="form-group">
                <label for="inicio">Inicio (*)</label>
                <input type="text" id="inicio" name="inicio" class="form-control">
              </div>  
              <div class="form-group">
                <label for="final">Final(*)</label>
                <input type="text" id="final" name="final" class="form-control">
              </div>  
            </form>
        </div>

        <div class="card-footer mt-2">
            <button class="btn btn-primary" onclick="document.getElementById('form_ejercicio1').submit()">Calcular ejercicio 1</button>
        </div>
    </div>
   </div>

   <div class="col-xl-4 col-lg-4 col-md-6 col-12">
   <div class="card">
        <div class="card-body">
            <div class="card-text">
                <h4>Ejercicio 2</h4>
            </div>
            <?php if(isset($_SESSION['error_1'])): ?>
              <div class="alert alert-danger">
               <b><?php echo $_SESSION["error_1"];?></b>
              </div>
            <?php unset($_SESSION["error_1"]); endif; ?>    

            <?php if(isset($_SESSION['success_1'])): ?>
              <div class="alert alert-success">
               <b><?php echo $_SESSION["success_1"] ?></b>
              </div>
            <?php unset($_SESSION["success_1"]); endif; ?>    
            <form action="controlador.php?accion=calcular_ejercicio2" method="post" id="form_ejercicio2">
              <div class="form-group">
                <label for="texto">Texto (*)</label>
                <input type="text" id="texto" name="texto" class="form-control">
              </div>  
                
            </form>
        </div>

        <div class="card-footer mt-2">
            <button class="btn btn-primary" onclick="document.getElementById('form_ejercicio2').submit()">Calcular ejercicio 2</button>
        </div>
    </div>
   </div>

   <div class="col-xl-4 col-lg-4 col-md-6 col-12">
   <div class="card">
        <div class="card-body">
            <div class="card-text">
                <h4>Ejercicio 3</h4>
            </div>
            <?php if(isset($_SESSION['error_2'])): ?>
              <div class="alert alert-danger">
               <b><?php echo $_SESSION["error_2"];?></b>
              </div>
            <?php unset($_SESSION["error_2"]); endif; ?>    

            <?php if(isset($_SESSION['success_2'])): ?>
              <div class="alert alert-success">
               <b><?php echo $_SESSION["success_2"] ?></b>
              </div>
            <?php unset($_SESSION["success_2"]); endif; ?>    
            <form action="controlador.php?accion=calcular_ejercicio3" method="post" id="form_ejercicio3">
              <div class="form-group">
                <label for="texto">Texto (*)</label>
                <input type="text" id="texto" name="texto" class="form-control">
              </div>  
                
            </form>
        </div>

        <div class="card-footer mt-2">
            <button class="btn btn-primary" id="calcular_ejercicio_3">Calcular ejercicio 3</button>
        </div>
    </div>
   </div>
  </div>  

  <!--- CDN DE JQUERY ---> 
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <script>
    $(document).ready(function(){
      
     $('#calcular_ejercicio_3').click(function(){
         
        $.ajax({
            url:"controlador.php?accion=calcular_ejercicio3",
            method:"POST",
            data:{texto:$('#texto').val()},
            success:function(response)
            {
                alert(response);
            }
        });
     });
    });
  </script>
</body>
</html>