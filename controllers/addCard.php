<?php
  $capture = new capture();
  $cards = new cards();
  if (isset($_POST['addCard'])) {
      if (isset($_FILES['giveCard']) && !empty($_FILES['giveCard'])) {
                $cards->pathName = $_FILES['giveCard']['name'];
                $cards->addCards();
              ?>
              <meta http-equiv="refresh" content="1;URL=/accueil ?>">
              <?php
      }
  }
?>
