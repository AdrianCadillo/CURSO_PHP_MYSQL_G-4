<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiacal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-1"><!--fila-->
            <div class="col-xl-5 col-lg-5 col-md-7 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Signo Zodiacal</h4>
                    </div>

                    <form action="procesozodiacal.php" method="post">
                        <div class="card-body">
                            <?php 
                            if(isset($_SESSION['response'])):
                            ?>
                            <div class="alert alert-success">
                                <b><?php echo $_SESSION['response']; ?></b>
                            </div>
                            <?php unset($_SESSION['response']); endif; ?>
                            <input type="date" name="fecha_nacimiento" class="form-control"
                            
                            value="<?php date_default_timezone_set("America/Lima");echo date("Y-m-d"); ?>">
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary" name="send">Enviar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>