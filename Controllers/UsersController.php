<?php
    
    include_once './models/UsersModel.php';
    

    

class Users {

   public $userModel;
   public $error = "";
   
    function __construct() {
        $this->userModel = new UsersModel();
    }

    function getUsers() {
        return $this->userModel->findAll();
    }

    function insertUser($request) {
        
        
       return $this->userModel->insertUserFunction($request);
        
        
    }

    function login($request) {
        if($request['email'] == "" || $request['password'] == ""){
            $this->error = 'Duhet te plotesohen te gjitha fushat!';
            return false;
        }
       return $this->userModel->loginUser($request);
    }
}



//echo $test->getUsers()[0]['Emri'];
    



?>