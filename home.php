<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/pokemon.php';
include_once 'models/capture.php';
include_once 'controllers/capturePokemon.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
?>
    <div class="title">
        <h1><?= $_SESSION['pseudo'] ?></h1>
    </div>
    <div class="container">
        <div class="introText">
            <h1>Bienvenue sur Ai Card !</h1>
            <p>Ai Card c'est un micro site  créé par Chromatyik, dans le seul but de s'amuser ! </p>
            <p>Le but est simple il vous suffis de regarder et les tiktok de Chromatyik, chaque jours à 18h !</p>
            <p>Le but est simple ! Devinez le Pokemon sur le TikTok de 18h, les 3 premiers à commenter le bon Pokemon + leur pseudo sur le site gagnerons la carte de la vidéo !</p>
            <h2>AMUSEZ VOUS BIEN !</h2>
        </div>
    </div>
  </body>
  <footer>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/script.js"></script>
  </footer>
</html>
<?php
}else{
    include_once 'index.php';
}
?>
