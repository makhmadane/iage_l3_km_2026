<?php
    require_once "./view/header.php";
    require_once "./model/personneModel.php";
    require_once "./controller/personneController.php";
   

    if(!empty($_GET['action']) && isset($_GET['action'])){

        if($_GET['action'] == "addPersonne"){
             addPersonne(); //controller
        }
        if($_GET['action'] == "savePersonne"){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            insertPersonne($nom,$prenom,$age); //controller
        }

         if($_GET['action'] == "updatePersonne"){
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            updatePersonne($id,$nom,$prenom,$age); //controller
         }  

        if(!empty($_GET['id']) && isset($_GET['id'])){
            if($_GET['action'] == "deletePersonne"){
                supprimerPersonne($_GET['id']); //controller
            }
            if($_GET['action'] == "modifierPersonne"){
                editPersonne($_GET['id']); //controller
            }
        }
    }else{
         getAllPersonne(); //controller
    }

?>