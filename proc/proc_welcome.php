<?php

session_start();
$_SESSION['welcome'] = 'check';
header('Location: ../view/visit_us.php');

?>
