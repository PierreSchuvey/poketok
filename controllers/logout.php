<?php include 'models/dataBase.php'; ?>
<?php

session_unset();
session_destroy();
session_start();
$_SESSION['connected'] = 0;
$_SESSION['id'] = 0;
$_SESSION['pseudo'] = 'Visiteur';
header('Location: ../');
?>