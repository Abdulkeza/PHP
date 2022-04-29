<?php

class dbConnection{
    protected $db;

    function __construct(){
        $this->db = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    }
}
?>