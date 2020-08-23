<?php
include_once 'DBConnection.php';

class SubscribeModel {
    private $DBCon;
    private $stm;

    function __construct() {
        $this->DBCon = new DBConnection();
        $this->stm = $this->DBCon->getConnection();
    }

    

    function insertSubscribe($request) {
        
        $query = 'INSERT into subscribe(Email) values (:email)';
        $statement = $this->stm->prepare($query);
      
        
        
        $statement->bindparam(":email", $request['email']);
      
        $statement->execute();
        
        
        

     
    }

    
}


?>