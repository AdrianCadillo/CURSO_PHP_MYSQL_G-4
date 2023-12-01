<?php 
session_start();
if(isset($_SESSION['id']) or isset($_COOKIE['id']))
{
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
    label
    {
        cursor: pointer;
    }
 </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-xl-6 col-lg-6 col-md-8 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <form action="procesologin.php" method="post">
                    <div class="card-body">
                         <?php 
                         if(isset($_SESSION['error'])):
                         ?>
                         <div class="alert alert-danger">
                            <b><?php echo $_SESSION['error'] ?></b>
                         </div>
                         <?php unset($_SESSION['error']); endif;?>
                        <div class="form-group">
                            <label for="username">Nombre de usuario (*)</label>
                            <input type="text" class="form-control"
                            name="username" id="username"
                            placeholder="Nombre de usuario...">
                        </div>

                        <div class="form-group">
                            <label for="password">Password (*)</label>
                            <input type="password" class="form-control"
                            name="password" id="password"
                            placeholder="Password...">
                        </div>

                        <label for="remember">Recordarme 
                            <input type="checkbox" name="remember" id="remember">
                        </label>
                         
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" name="entrar">Entrar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>