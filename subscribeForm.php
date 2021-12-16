<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/addUserController.php';
?>
    <div class="container bodyPage" id="subscribeContainer">
        <div class="col-lg-12 text-center">
            <p class="errorsLoginSub"><?= isset($formError['add']) ? $formError['add'] : '' ?></p>
            <p class="errorsLoginSub"><?= isset($formError['redirect']) ? $formError['redirect'] : '' ?></p>
            <div class="title">
                <h1>Inscription</h1>
            </div>

        </div>
        <form id="subForm" action="" method="post" enctype="multipart/form-data">
            <div class=" offset-1 col-10 offset-sm-3 col-sm-6  topLog">
                <label>Pseudo* : </label>
            </div>
            <div class="form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <input type="text" name="pseudo" class="form-control" value="<?= isset($_POST['pseudo']) ? $_POST['pseudo'] : '' ?>" >
                <p class = "errorsLoginSub"><?= isset($formError['pseudo']) ? $formError['pseudo'] : '' ?></p>
            </div>
            <div class="form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <label>Mot de passe* : </label>
            </div>
            <div class="form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <input type="password" name="password" class="form-control" >
                <p class="errorsLoginSub"><?= isset($formError['password']) ? $formError['password'] : '' ?></p>
            </div>
            <div class="form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <label>Mot de passe (confirmation)* : </label>
            </div>
            <div class="form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <input type="password" name="confPassword" class="form-control" >
                <p class="errorsLoginSub"><?= isset($formError['confPassword']) ? $formError['confPassword'] : '' ?></p>
            </div>
            <div class="form-group form-group  offset-1 col-10 offset-sm-3 col-sm-6">
                <button type="submit" class="form-control" name="validInscrip"> Valider l'inscription</button>
            </div>
        </form>
    </div>