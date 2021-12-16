<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'models/capture.php';
include_once 'controllers/profilController.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
?>
<div class="title">
    <h1><?= $userInfos->pseudo ?></h1>
</div>
    <div id="tiktok">
        <?php
        if ($userInfos->id == $_SESSION['id'] && empty($userInfos->tiktok)){
                ?>
                <form id="subForm" action="" method="post" enctype="multipart/form-data">
                    <div class=" offset-1 col-10 offset-sm-3 col-sm-6  topLog">
                        <label>Code de capture : </label>
                    </div>
                    <div class="form-group  offset-1 col-10 offset-sm-5 col-sm-2">
                        <input id="codeInput" type="text" name="tiktok" class="form-control" placeholder="Pseudo Tiktok" >
                    </div>
                    <div class="form-group form-group  offset-1 col-10 offset-sm-5 col-sm-2">
                        <button type="submit" class="form-control" name="validTiktok"> Valider</button>
                    </div>
                </form>
            <?php
            }else{
            if(!empty($userInfos->tiktok)){
                ?>
                <p style="text-align:center;color:white">Pseudo TikTok</p>
                <p style="text-align:center;color:white;font-size:20px"><?= $userInfos->tiktok ?></p>
                <?php
            }
        }
        ?>
    </div>
    <p style="color:white;text-align: center;font-size: 20px">Score : <?= $nbCapture->nbCapture ?></p>
<div class="container">
    <div class="row">

            <?php
            foreach ($allCapture as $gc){
                ?>
        <div class="col-4">
                <p style="color:white;text-align: center"><?= $gc->name?></p>
                <img style="display: block;margin: auto" src="assets/images/pokemon/<?= $gc->name?>.png" alt="">
        </div>
                <?php
            }?>
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
