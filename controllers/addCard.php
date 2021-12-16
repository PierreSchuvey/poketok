<?php
  if (isset($_POST['addCard'])) {
    include_once '../models/dataBase.php';
    include_once '../models/capture.php';
    include_once '../models/cards.php';
    $capture = new capture();
    $cards = new cards();
    $fichier = basename($_FILES['cardPath']['name']);
    $dossier = '../assets/images/Cards/';
    move_uploaded_file($_FILES['cardPath']['tmp_name'], $dossier . $fichier);
    $cards->name = $_POST['cardName'];
    $cards->nb = $_POST['cardNumber'];
    $cards->pathName = htmlspecialchars($_FILES['cardPath']['name']);
    $cards->addCards();
    $lastId = $cards->getLastCard();
    $capture->idUser = $_POST['userId'];
    $capture->idCards = $lastId->id;
    $capture->addCapture();
  ?>
  <meta http-equiv="refresh" content="3;URL=/Profil_<?= $_POST['userId'] ?>">
  <?php
  }
?>
