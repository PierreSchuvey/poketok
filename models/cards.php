<?php

class cards extends dataBase {

    public $id = 0;
    public $pathName = '';
    public $name = '';
    public $nb = 0;

    public function __construct() {
        parent::__construct();
    }

    public function allCode() {
        $query = 'SELECT `id`, `path`, `name`, `number` FROM `cards`';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $codeList = $responseRequest->fetchAll(PDO::FETCH_ASSOC);
        }
        return $codeList;
    }

    public function addCards() {
        //On prépare la requête sql qui insert dans les champs selectionnés, les valeurs sont des marqueurs nominatifs
        $query = 'INSERT INTO `cards`(`path`, `name`, `number`) VALUES(:pathName, :name, :nb)';
        $addCards = $this->db->prepare($query);
        $addCards->bindValue(':pathName', $this->pathName, PDO::PARAM_STR);
        $addCards->bindValue(':name', $this->name, PDO::PARAM_STR);
        $addCards->bindValue(':nb', $this->nb, PDO::PARAM_INT);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addCards->execute();
    }

    public function getLastCard() {
        $query = 'SELECT `id` FROM `cards` WHERE id=(SELECT max(id) FROM cards)';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $getLastCard = $responseRequest->fetch(PDO::FETCH_OBJ);
        }
        return $getLastCard;
    }


    public function __destruct() {

    }

}

?>
