<?php

class cards extends dataBase {

    public $id = 0;
    public $path = '';
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

    public function __destruct() {

    }

}

?>
