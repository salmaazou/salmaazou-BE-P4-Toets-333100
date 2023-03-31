<?php

class PoundForPoundModel {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAll() {
        // echo "HOi";
        $this->db->query('SELECT * FROM PoundForPound');
        // var_dump($this->db->resultSet());
        return $this->db->resultSet();
    }
}

?>
   