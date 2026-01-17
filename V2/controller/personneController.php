<?php

class PersonneController{

    private $model;
    
    function __construct($model){
        $this->model = $model;
    }

    function getAllPersonne(){
      $personnes  = $this->model->allPersonne(); //model
      require_once "./view/personne/list.php"; //view
    }

    function supprimerPersonne($id){
        $this->model->deletePersonne($id); //model
        header("location:index.php");
    }

    function addPersonne(){
        require_once "./view/personne/add.php";
    }

    function insertPersonne($nom,$prenom,$age){
        $this->model->savePersonne($nom, $prenom, $age);
        header("location:index.php");
    }

    function editPersonne($id){
        $personne = $this->model->getPersonneById($id); //model
        require_once "./view/personne/edit.php"; //view
    }

    function updatePersonne($id,$nom,$prenom,$age){
        $this->model->UpdateForPersonne($id,$nom,$prenom,$age);
        header("location:index.php");
    }


        
}

?>