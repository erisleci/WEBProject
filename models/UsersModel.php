<?php
include_once 'DBConnection.php';

class UsersModel {
   private $DBCon;
   private $stm;

    function __construct() {
        $this->DBCon = new DBConnection();
        $this->stm = $this->DBCon->getConnection();
    }

    function findAll() {
       $query = 'SELECT * from user';
       $statement = $this->stm->prepare($query);
       $statement->execute();
      return $statement->fetchAll();
    }

    function findByEmail($email) {
        $query = 'SELECT * from user where Email = :email';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(":email",$email);
        $statement->execute();
        return $statement->fetch();
    }
    
    function insertUserFunction($request) {
        if($this->findByEmail($request['emailAddress']) != null) {
            return false;
        }
        $query = 'INSERT into user(Emri,Mbiemri,Password,Email,isAdmin) values (:emri,:mbiemri,:password,:email,0)';
        $statement = $this->stm->prepare($query);
       // $encryptedPassword = password_hash($request['password'], PASSWORD_BCRYPT);
        
        $statement->bindparam(":emri",$request['firstName']);
        $statement->bindparam(":mbiemri",$request['lastName']);
        $statement->bindparam(":password",$request['password']);
        $statement->bindparam(":email",$request['emailAddress']);
      
       return $statement->execute();
        

       // echo "<script> alert(\"The registration was successful!\")</script>";
        //header("Location: ./index.php");

    }

    

    function loginUser($request) {
        $query = 'SELECT * from user WHERE Email = :email AND Password = :password';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':email',$request['email']);
        $statement->bindparam(':password',$request['password']);
        $statement->execute();
        return $statement->fetch();
        
    }


}

/* $u = new UsersModel;

$user = $u->findByEmail('erisleci19@gmail.com');
echo $user['Password'];

*/






/*
$list = $user->findAll();
   foreach($list as $user) {
       echo $user['Emri'];
       echo $user['Emri'];
       echo $user['Email'];
       echo $user['Mbiemri'];

       
    }
 */   


    
?>