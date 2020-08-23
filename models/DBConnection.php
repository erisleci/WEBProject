<?php
class DBConnection
{
    private $servername = 'localhost';
    private $user = 'root';
    private $password = '';
    private $databaseName = 'WebProject';

    public function getConnection()
    {
        // inicojme koneksionin me db
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=WebProject", "root", "");
        }catch(PDOException $pdo){
            die("DB connection failed!");
        }

        return $pdo;
    }

    
    
   
        

     

    

    
}

//$db = new DBConnection();
/*
$query = 'SELECT * from user';
    $stm = $db->getConnection();
    $blaa = $stm->prepare($query);
    $blaa->execute();
    $list = $blaa->fetchAll();
   foreach($list as $user) {
       echo $user['Emri'];
       echo $user['Emri'];
       echo $user['Emri'];
       echo $user['Emri'];

       
    }
 */   

?>