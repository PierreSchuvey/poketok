<?php

class capture extends dataBase {

    public $id = 0;
    public $idCards = 0;
    public $idUser = 0;
    public $time = '';

    public function __construct() {
        parent::__construct();
    }

    public function getLeaderboard() {
        $query = 'SELECT `users`.`id` AS `id`, `users`.`pseudo` AS `player`, `users`.`tiktok` AS `tiktok`, COUNT(`capture`.`id`) AS `nbCapture`,`users`.`id` AS `id` FROM `capture` INNER JOIN `users` ON `users`.`id`=`capture`.`id_user` WHERE id_user != 5 GROUP BY `capture`.`id_user` ORDER BY nbCapture DESC';
        $getLeaderboard = $this->db->query($query);
        if (is_object($getLeaderboard)) {
            $getLeaderboard = $getLeaderboard->fetchAll(PDO::FETCH_ASSOC);
        }
        return $getLeaderboard;
    }
    public function getNbCapture() {
        $query = 'SELECT COUNT(`capture`.`id`) AS `nbCapture`FROM `capture` WHERE id_user = :id GROUP BY `capture`.`id_user`';
        $getNbCapture = $this->db->prepare($query);
        $getNbCapture->bindValue(':id', $this->idUser, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getNbCapture->execute();
        return $getNbCapture = $getNbCapture->fetch(PDO::FETCH_OBJ);
    }

    public function getAllCaptured() {
        $query = 'SELECT `cards`.`path` AS `path`, `cards`.`name` AS `name`, `cards`.`number` AS `number` FROM `capture` INNER JOIN `cards` ON `cards`.`id`=`capture`.`id_cards` WHERE capture.id_user = :id ORDER BY cards.number DESC';
        $getAllCaptured = $this->db->prepare($query);
        $getAllCaptured->bindValue(':id', $this->idUser, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        $getAllCaptured->execute();
        return $getAllCaptured = $getAllCaptured->fetchAll(PDO::FETCH_OBJ);
    }


    public function __destruct() {

    }

}

?>
