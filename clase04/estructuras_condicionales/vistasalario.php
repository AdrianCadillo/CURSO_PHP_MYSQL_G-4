<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-xl-6 col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Salario</h4>
                    </div>
                    <form action="procesosalario.php" method="post">
                    <div class="card-body">
                        <?php 
                        if(isset($_SESSION['response'])):
                        ?>
                         <div class="alert alert-success">
                            <?php echo $_SESSION['response']; ?>
                         </div>
                        <?php unset($_SESSION['response']); endif; ?>
                        <div class="form-group">
                            <label for="nombre">Nombre (*)</label>
                            <input type="text" class="form-control"
                            name="nombre" id="nombre">
                        </div>

                        <div class="form-group">
                            <label for="salario">Salario (*)</label>
                            <input type="text" class="form-control"
                            name="salario" id="salario">
                        </div>
                        <div class="form-group">
                            <label for="ocupacion">Ocupación (*)</label>
                            <select name="ocupacion" id="ocupacion"
                            class="form-select">
                             <option value="Ing.de sistemas">Ing.de sistemas</option>
                             <option value="Administrador">Administrador</option>
                             <option value="Contador">Contador</option>
                             <option value="Programador">Programador</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" name="calcular">Calcular</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>