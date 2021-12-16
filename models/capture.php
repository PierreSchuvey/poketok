<?php

class capture extends dataBase {

    public $id = 0;
    public $idPokemon = 0;
    public $idUser = 0;
    public $time = '';

    public function __construct() {
        parent::__construct();
    }

    public function getIsAlready() {

        $pokemonByCode = $this->db->prepare('SELECT `id` FROM `capture` WHERE `id_pokemon` = :idPokemon AND `id_user` = :idUser');
        $pokemonByCode->bindValue(':idPokemon', $this->idPokemon, PDO::PARAM_STR);
        $pokemonByCode->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        $pokemonByCode->execute();
        return $pokemonByCode = $pokemonByCode->fetch(PDO::FETCH_OBJ);
    }

    public function addCapture() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `capture`(`id_user`, `id_pokemon`, `time`) VALUES(:idUser, :idPokemon, :times )';
        $addUser = $this->db->prepare($query);
        $addUser->bindValue(':idPokemon', $this->idPokemon, PDO::PARAM_STR);
        $addUser->bindValue(':idUser', $this->idUser, PDO::PARAM_STR);
        $addUser->bindValue(':times', $this->time, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addUser->execute();
    }

    public function getLeaderboard() {
        $query = 'SELECT `users`.`pseudo` AS `player`, `users`.`tiktok` AS `tiktok`, COUNT(`capture`.`id`) AS `nbCapture`,`users`.`id` AS `id` FROM `capture` INNER JOIN `users` ON `users`.`id`=`capture`.`id_user` WHERE id_user != 5 GROUP BY `capture`.`id_user` ORDER BY nbCapture DESC';
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
        $query = 'SELECT `pokemon`.`nomPkm` AS `name`, `capture`.`time` AS `captureTime` FROM `capture` INNER JOIN `pokemon` ON `pokemon`.`id`=`capture`.`id_pokemon` WHERE capture.id_user = :id ORDER BY capture.time DESC';
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