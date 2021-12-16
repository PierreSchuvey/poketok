<?php session_start(); ?>
<!DOCTYPE html>
<html ng-app="app" ng-controller="testCtrl">
<head>
    <title>Ai Card</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
</head>
<?php if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) { ?>
<nav class="navbar navbar-dark bg-dark navbar-expand-md">
    <a style="margin-left:15px" class="navbar-brand" href="/accueil">Ai Card</a>
    <button style="position:absolute;right:20px;top:0" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a style="margin-left: 10px;" class="nav-link" href="/accueil">Accueil</a></li>
            <li class="nav-item"><a style="margin-left: 10px;" class="nav-link" href="/Profil_<?=$_SESSION['id']?>">Profil</a></li>
            <li class="nav-item"><a style="margin-left: 10px;" class="nav-link" href="/classement">LeaderBoard</a></li>
            <li class="nav-item"><a style="margin-left: 10px;" class="nav-link" href="/controllers/logout.php">Déconnexion</a></li>
            <?php
            if($_SESSION['role'] == "Admin"){
            ?>
              <li class="nav-item"><a style="margin-left: 10px;" class="nav-link" href="/utilisateurs">Utilisateurs</a></li>
            <?php
            }
            ?>

        </ul>
    </div>
</nav>
<body>
<?php } ?>
