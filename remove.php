<?php
    include_once 'Controllers/ArticlesController.php';
    $articleController = new Articles();

    
    if(isset($_GET['id'])) {
        $articleController->deleteArticle($_GET['id']);
    }
    header('Location: dashboard.php');

    

?>