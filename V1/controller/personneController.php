<?php



    function getAllPersonne(){
      $personnes  = allPersonne(); //model
      require_once "./view/personne/list.php"; //view
    }

    function supprimerPersonne($id){
        deletePersonne($id); //model
        header("location:index.php");
    }

    function addPersonne(){
        require_once "./view/personne/add.php";
    }

    function insertPersonne($nom,$prenom,$age){
        savePersonne($nom, $prenom, $age);
        header("location:index.php");
    }

    function editPersonne($id){
        $personne = getPersonneById($id); //model
        require_once "./view/personne/edit.php"; //view
    }

    function updatePersonne($id,$nom,$prenom,$age){
        UpdateForPersonne($id,$nom,$prenom,$age);
        header("location:index.php");
    }


?>