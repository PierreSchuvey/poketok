<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/capture.php';
include_once 'controllers/leaderBoardController.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1) {
    ?>
    <div class="title">
        <h1>Leaderboard</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pseudo</th>
                <th scope="col">TikTok</th>
                <th scope="col">Cartes Possédées</th>
                <th scope="col">Voir le profil</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $classement = 1;
            foreach($leaderboard as $l){
                ?>
                <tr>
                    <td><?=$classement?></td>
                    <td><?=$l['player']?></td>
                    <td><?=$l['tiktok']?></td>
                    <td><?=$l['nbCapture']?></td>
                    <td><a id="profilLeaderBoard" href="/Profil_<?=$l['id']?>">Profil</a></td>
                </tr>
                <?php
                $classement ++;
            }
            ?>
            </tbody>
        </table>
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
