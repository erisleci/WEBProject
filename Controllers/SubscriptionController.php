<?php
    include_once "./models/SubscriptionModel.php";
    

    

class Subscription {

   public $subscriptionModel;
   
    function __construct() {
        $this->subscriptionModel = new SubscriptionsModel();
    }

    function getSubscriptions() {
        return $this->subscriptionModel->findAll();
    }

   
}



?>