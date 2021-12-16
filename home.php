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
            <h1>Bienvenue sur Poketok !</h1>
            <p>Poketok c'est un micro site  créé par Chromatyik, dans le seul but de s'amuser et de savoir qui est le meilleur dresseur ! </p>
            <p>Le but est simple il vous suffis de regarder et les tiktok de Chromatyik, dans chaque tiktok Pokemon se trouvera un code qu'il vous suffis de rentrer dans le champ plus bas et vous capturerais le pokemon en question ! </p>
            <p>Chaque Pokemon capturé vous donne 1 point pour grimper dans le classement, peut être qu'il y aura des surprises pour les meilleurs dresseurs si ont est nombreux ;)</p>
            <h2>AMUSEZ VOUS BIEN !</h2>
        </div>
        <form id="subForm" action="" method="post" enctype="multipart/form-data">
            <div class=" offset-1 col-10 offset-sm-3 col-sm-6  topLog">
                <label>Code de capture : </label>
            </div>
            <div class="form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <input id="codeInput" type="text" name="code" class="form-control" placeholder="Code" >
                <p class = "errorsLoginSub"><?= isset($formError['code']) ? $formError['code'] : '' ?></p>
            </div>
            <div class="form-group form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <button type="submit" class="form-control" name="validCapture"> Capturer !</button>
            </div>
        </form>
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