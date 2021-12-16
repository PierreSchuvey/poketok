<?php
include_once 'vues/header.php';
include_once 'models/dataBase.php';
include_once 'models/user.php';
include_once 'controllers/userListController.php';
if (isset($_SESSION['connected']) && isset($_SESSION['id']) && $_SESSION['connected'] == 1 && $_SESSION['role'] == "Admin") {
    ?>
    <div class="title">
        <h1>Leaderboard</h1>
    </div>
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Pseudo</th>
                <th scope="col">Voir le profil</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($userList as $u){
                ?>
                <tr style="background-color:orange;color:black">
                    <td><?=$l['pseudo']?></td>
                    <td><?=$l['tiktok']?></td>
                    <td><a style="color:black" id="profilLeaderBoard" href="/Profil_<?=$l['id']?>">Profil</a></td>
                </tr>
                <?php
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
