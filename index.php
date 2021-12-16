<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/users.php';
include_once 'controllers/loginUsers.php';
    ?>
    <body>
    <div class="container bodyPage" id="loginContainer">
        <div class="title">
            <h1>Poketok</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <form id="loginForm" action="" method="post">
                    <div class="form-group offset-1 col-10 offset-sm-3 col-sm-6 topLog">
                        <label for="exampleInputEmail1">Pseudo</label><br>
                        <input type="text" class="form-control" name="pseudoLog">
                    </div>
                    <div class="form-group offset-1 col-10 offset-sm-3 col-sm-6">
                        <label for="exampleInputEmail1">Mot de passe</label><br>
                        <input type="password" class="form-control" name="passwordLog">
                    </div>
                    <div class="form-group offset-1 col-10 offset-sm-3 col-sm-6">
                        <button style="width:50%" type="submit" class="form-control" name="logInSubmit"> Connexion</button>
                        <p class="errorsLoginSub"><?= isset($formError['passwordLog']) ? $formError['passwordLog'] : '' ?><?= isset($formError['pseudoLog']) ? $formError['pseudoLog'] : '' ?></p>
                        <small style="color:white">Pour créer un compte c'est : <a style="color:red" href = "/inscription" alt = "Inscription" id = "subscribe">Ici</a></small>
                    </div>
                </form>
            </div>
        </div>
        <div class = "row">
            <div class = "col-lg-12">
            </div>
        </div>
    </div>
<?php
include_once 'vues/footer.php';
?>