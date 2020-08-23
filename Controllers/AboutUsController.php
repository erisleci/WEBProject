<?php
    
    include_once './models/AboutUsModel.php';
    

    

class AboutUs {

   public $aboutUsModel;
   
    function __construct() {
        $this->aboutUsModel = new AboutUsModel();
    }

    
    
    function getAboutUs() {
        return $this->aboutUsModel->findAll();
    }

    

    
}




    



?>