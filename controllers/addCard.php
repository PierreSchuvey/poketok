<?php
  $capture = new capture();
  $cards = new cards();
  if (isset($_POST['addCard'])) {
      if (isset($_FILES['giveCard']) && !empty($_FILES['giveCard'])) {
          $fichier = basename($_FILES['giveCard']['name']);
          $taille_maxi = 10000000;
          $taille = filesize($_FILES['giveCard']['tmp_name']);
          $extensions = array('.png', '.gif', '.jpg', '.jpeg');
          $extension = strrchr($_FILES['giveCard']['name'], '.');
          //Début des vérifications de sécurité...
          if (!in_array($extension, $extensions)) { //Si l'extension n'est pas dans le tableau
              $formError['errorFile'] = 'Le fichier est trop gros ou dans le mauvais format !';
          }
          if ($taille > $taille_maxi) {
              $formError['errorFile'] = 'Le fichier est trop gros ou dans le mauvais format !';
          }
          if (count($formError) == 0) { //S'il n'y a pas d'erreur, on upload
              $dossier = '../assets/images/Cards/';
              move_uploaded_file($_FILES['giveCard']['tmp_name'], $dossier . $fichier);
              $cards->path = $_FILES['giveCard']['name'];
              $cards->addCard();
              ?>
              <meta http-equiv="refresh" content="1;URL=/accueil ?>">
              <?php
          }
      }
  }
?>
