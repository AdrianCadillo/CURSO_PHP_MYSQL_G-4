<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center
    vh-100">
     <div class="col-xl-6 col-lg-6 col-md-8 col-12">
        <div class="card">
            <div class="card-header">
                <h4>Conversión</h4>
            </div>

            <form action="" method="post">
            <div class="card-body">
                <h4>
                <?php 
                  echo isset($_SESSION['response']) ? $_SESSION['response']:'';
                  
                  unset($_SESSION['response']);
                ?>
                </h4>
                <div class="form-group">
                    <label for="pies">Cantidad pies (*)</label>
                    <input type="text" class="form-control" name="pies" id="pies">
                </div>

                <div class="form-group">
                    <label for="metros">Cantidad metros (*)</label>
                    <input type="text" class="form-control" name="metros" id="metros">
                </div>
            </div>

            <div class="card-footer">
                <button class="btn btn-primary" name="calcular">
                    Calcular
                </button>

                <button type="reset" class="btn btn-danger">cancelar</button>
            </div>
            </form>
        </div>
     </div>
    </div>
  </div>
  <?php 
   if(isset($_POST['calcular']))
   {
    $CantidadPies = $_POST['pies'] ;
    $CantidadMetros = $_POST['metros'];

    /// cantidad de pulgadas , tendiendo cantidad de pies
    $PiesAPulgadas = $CantidadPies * 12;
    
    $PiesAYardias = $CantidadPies / 3;

    $PiesAMetros = $PiesAPulgadas * 0.0254; 

    $PiesAMillas = $PiesAMetros / 1609;


    /// metros a pulgadas
    $MetrosAPulgadas = $CantidadMetros/0.0254;

    $MetrosAYardas = ($MetrosAPulgadas/12)/3;

    $SumaTotalPulgadas = $PiesAPulgadas +  $MetrosAPulgadas;

    $SumaTotalYardas = $PiesAYardias + $MetrosAYardas;

    /// de metros a yardas . +

    $Resultado = "CANTIDAD DE PULGADAS : ".number_format($SumaTotalPulgadas,2,","," ").
                 "<br>CANTIDAD DE YARDAS : ".number_format($SumaTotalYardas,2,","," ");
  
    $_SESSION['response'] = $Resultado;
    header("location:./");
   } 
  ?>  
</body>
</html>