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
    <link rel="stylesheet" href="../stylesheets/stylesheet.css">
    <link rel="icon" href="../img/icon.ico">
</head>
<body>

    <img class="construction" src="../img/in_construction.png" alt="No se ha podido cargar la imagen">

</body>
</html>