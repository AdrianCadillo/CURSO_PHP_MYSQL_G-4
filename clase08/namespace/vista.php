<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
     if(isset($_SESSION["errors"])):
    ?>
      <ul>
        <?php foreach($_SESSION['errors'] as $error):  ?>
         <li><?php echo $error; ?></li>
        <?php endforeach; ?>    
      </ul>
    <?php unset($_SESSION["errors"]); endif;?>
    <form action="proceso.php" method="post">
        <input type="text" name="usuario">
        <input type="password" name="pasword">
        <button name="login">Ingresar</button>
    </form>
</body>
</html>