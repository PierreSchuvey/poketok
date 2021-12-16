<?php

class pokemon extends dataBase {

    public $id = 0;
    public $name = '';
    public $code = '';

    public function __construct() {
        parent::__construct();
    }

    public function allCode() {
        $query = 'SELECT `id`, `code`, `nomPkm` FROM `pokemon`';
        $responseRequest = $this->db->query($query);
        if (is_object($responseRequest)) {
            $codeList = $responseRequest->fetchAll(PDO::FETCH_ASSOC);
        }
        return $codeList;
    }

    public function getByCode() {

        $pokemonByCode = $this->db->prepare('SELECT `id`, `code`, `nomPkm` FROM `pokemon` WHERE `code` = :code');
        $pokemonByCode->bindValue(':code', $this->code, PDO::PARAM_STR);
        $pokemonByCode->execute();
        return $pokemonByCode = $pokemonByCode->fetch(PDO::FETCH_OBJ);
    }



    public function __destruct() {

    }

}

?>