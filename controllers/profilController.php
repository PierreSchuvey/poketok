<?php
$user = new users();
$capture = new capture();
$user->id = $_GET['idUser'];
$capture->idUser = $_GET['idUser'];
$userInfos = $user->getUserById();
$nbCapture = $capture->getNbCapture();
$allCapture = $capture->getAllCaptured();
if (isset($_POST['validTiktok'])) {
    if (isset($_POST['tiktok']) && !empty($_POST['tiktok'])) {
        $user->tiktok = htmlspecialchars($_POST['tiktok']);
        $user->id = $_GET['idUser'];
        $user->addTiktok();
        ?>
        <meta http-equiv="refresh" content="0.1;URL=/profil.php?idUser=<?=$_GET['idUser']?>">
        <?php
    } else {
        $formError['code'] = 'Champ vide !';
    }
}