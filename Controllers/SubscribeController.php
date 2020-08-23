<?php
    
    include_once './models/SubscribeModel.php';
    

    

class Subscribe {

   public $subscribeModel;
   public $error= '';
   
    function __construct() {
        $this->subscribeModel = new SubscribeModel();
    }

    function insert($request) {
       
        $email = $request['email'];
        if($email === '') {
            $this->error = 'Nuk lejohet te jete e zbrazet';
            return;
            
           
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Wrong email format';
            
            return;
            
        }

        
        if($this->error === '') {
            $this->subscribeModel->insertSubscribe($request);
            
        }

        
        return true;

        
        
    }

    

    
}




    



?>