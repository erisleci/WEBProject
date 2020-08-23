<?php
include_once 'DBConnection.php';

class SubscriptionsModel {
    private $DBCon;
    private $stm;

    function __construct() {
        $this->DBCon = new DBConnection();
        $this->stm = $this->DBCon->getConnection();
    }

    

    function findAll() {
        $query = 'SELECT * from subscription';
        $statement = $this->stm->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

    
}


?>