<?php
include_once 'DBConnection.php';


class AboutUsModel {
    private $DBCon;
    private $stm;

    function __construct() {
        $this->DBCon = new DBConnection();
        $this->stm = $this->DBCon->getConnection();
    }

    

    function findAll() {
        $query = 'SELECT * from aboutUs';
        $statement = $this->stm->prepare($query);
        
        $statement->execute();
        return $statement->fetchAll();
    }

    
}


?>