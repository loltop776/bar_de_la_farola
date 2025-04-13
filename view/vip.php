<?php

if(isset($_SESSION['welcome']) && $_SESSION['welcome'] != 'check'){

    header('Location: ../index.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIP</title>
</head>
<body>
    
    <!-- Inicio de sesión del VIP -->
    <form action="" method="POST">

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">

        <label for="passwd">Contraseña:</label>
        <input type="password" name="passwd" id="passwd">

        <input type="submit" value="Iniciar sesión">

    </form>


</body>
</html>