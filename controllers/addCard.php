<?php
  $capture = new capture();
  $cards = new cards();
  if (isset($_POST['addCard'])) {
      if (isset($_FILES['giveCard']) && !empty($_FILES['giveCard'])) {
              $uploaddir = '/assets/images/Cards/';
              $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
              if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
                $cards->pathName = $_FILES['giveCard']['name'];
                $cards->addCards();
              }
              ?>
              <meta http-equiv="refresh" content="1;URL=/accueil ?>">
              <?php
      }
  }
?>
