<?php

class cards extends dataBase {

    public $id = 0;
    public $pathName = '';
    public $name = '';
    public $number = 0;

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
        $query = 'INSERT INTO `cards`(`path`) VALUES(:pathName)';
        $addCards = $this->db->prepare($query);
        $addCards->bindValue(':pathName', $this->path, PDO::PARAM_STR);
        //Si l'insertion s'est correctement déroulée on retourne vrai
        return $addCards->execute();
    }

    public function __destruct() {

    }

}

?>
