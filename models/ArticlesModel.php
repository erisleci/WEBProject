<?php
include_once 'DBConnection.php';

class ArticlesModel {
    private $DBCon;
    private $stm;

    function __construct() {
        $this->DBCon = new DBConnection();
        $this->stm = $this->DBCon->getConnection();
    }

    function findByCategory($category) {
        $query = 'SELECT * from articles WHERE PrimaryCategory = :category order by ID desc limit 5';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':category', $category);
        $statement->execute();
        return $statement->fetchAll();
    }

    function findAll() {
        $query = 'SELECT * from articles';
        $statement = $this->stm->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }

    function findById($id) {
        $query = 'SELECT * from articles where id = :id';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':id', $id);
        $statement->execute();
        return $statement->fetch();
    }

    function findAdmin($id) {
        $query = 'SELECT * from articles as a inner join user as u on (u.ID = a.admin) 
        where u.ID = :id';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':id', $id);
        $statement->execute();
        return $statement->fetch();

    }

    function delete($id){
        $query = 'DELETE from articles where id = :id' ;
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':id', $id);
        $statement->execute();
    }

    function update($request) {
        $query = 'UPDATE articles SET Title = :title, Description = :description, admin = :admin 
            WHERE id = :id';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':title', $request['title']); 
        $statement->bindparam(':description', $request['description']); 
        $statement->bindparam(':admin', $request['admin']);
        $statement->bindparam(':id', $request['id']);
        
         $statement->execute();
        
        

    }

    function create($request) {
        $query = 'INSERT into articles(Title,Subtitle,Description,PrimaryCategory,SecondaryCategory,Photo)
        values (:title, :subtitle,:description,:primaryCategory,:secondaryCategory,:photo)';
        $statement = $this->stm->prepare($query);
        $statement->bindparam(':title',$request['title']);
        $statement->bindparam(':subtitle',$request['subtitle']);
        $statement->bindparam(':description',$request['description']);
        $statement->bindparam(':primaryCategory',$request['primaryCategory']);
        $statement->bindparam(':secondaryCategory',$request['secondaryCategory']);
        $statement->bindparam(':photo',$request['photo']);
        $statement->execute();
    }

   

    



    
}




?>