<?php
    include_once "./models/ArticlesModel.php";
    

    

class Articles {

   public $articleModel;
   public $createError;
   public $createSuccess;
   
    function __construct() {
        $this->articleModel = new ArticlesModel();
    }

    function getArticles() {
        return $this->articleModel->findAll();
    }

    function getArticlesByCategory($category) {
        return $this->articleModel->findByCategory($category);
    }

    function insertArticle($request) {
        
        $this->articleModel->insertArticle($request);
        
        
    }

    function findId($id) {
        return $this->articleModel->findById($id);
    }

    function deleteArticle($id) {
         $this->articleModel->delete($id);
    }

    function updateArticle($request) {
        $this->articleModel->update($request);
    }

    function findAdmin($id) {
        return $this->articleModel->findAdmin($id);
    }

    function createArticle($request) {
        $this->createError = '';
        if($request['title'] === '' || $request['subtitle'] === '' ||  $request['description'] === ''
        || $request['primaryCategory'] === '' || $request['secondaryCategory'] === '' || $request['photo'] == '') {
            $this->createError = 'Te gjitha fushat duhet te plotesohen';
            return false;
        }
        $this->createSuccess = "Lajmi u shtua me sukses";
        $this->articleModel->create($request);
    }
}



