<?php

class PersonneModel{

    private $database;
    
    function __construct($database){
        $this->database = $database;
    }

    function savePersonne($nom, $prenom, $age){
        $stmt = $this->database->prepare("INSERT INTO personne (nom,prenom,age)
        values (:nom,:prenom,:age)");
        $stmt->execute(["age"=>$age, "prenom"=>$prenom, "nom"=>$nom ]);
    }
    
  
    function allPersonne(){
        $stmt = $this->database->prepare("SELECT * FROM personne");
        $stmt->execute();
        return $stmt->fetchAll();
    }

     function getPersonneById($id){
        $stmt = $this->database->prepare("SELECT * FROM personne where id= ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }


    function deletePersonne($id){
        $stmt = $this->database->prepare("DELETE FROM personne where id = ?");
        $stmt->execute([$id]);
    }

     function UpdateForPersonne($id,$nom,$prenom,$age){
        $stmt = $this->database->prepare("update personne set nom= :nom, prenom = :prenom,age= :age 
        where id = :id");
        $stmt->execute(["age"=>$age, "prenom"=>$prenom, "nom"=>$nom, "id"=>$id ]);
    }

}

?>