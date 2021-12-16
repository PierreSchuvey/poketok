<?php
// On instensie la class user()
$pokemon = new pokemon();
//On crée le tableau vide des erreur
$codeList = $pokemon->allCode();
$formError = array();

if (isset($_POST['validCapture'])) {
    if (isset($_POST['code']) && !empty($_POST['code'])) {
        $pokemon->code = htmlspecialchars($_POST['code']);
        $isCapturable = $pokemon->getByCode();
                if (!empty($isCapturable)) {
                    $capture = new capture();
                    $capture->idPokemon = $isCapturable->id;
                    $capture->idUser = $_SESSION['id'];
                    $alreadyCapture = $capture->getIsAlready();
                    if (empty($alreadyCapture)){
                        setlocale(LC_TIME, 'fra_fra');
                        $date = strftime('%Y-%m-%d %H:%M:%S');
                        $capture->time = $date;

                        $capture->addCapture();
                        include_once 'congrat.php';
                    }else{
                        $formError['code'] = 'Tu as déjà rentré ce code !';
                    }
                }else{
                    $formError['code'] = 'Code invalid !';
                }
    } else {
        $formError['code'] = 'Champ vide !';
    }
}
?>