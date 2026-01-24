<?php
    require_once "./src/view/header.php";
    require_once "./src/model/personne.php";
    require_once "./src/model/personneModel.php";
    require_once "./src/controller/personneController.php";
    require_once "bootstrap.php";


    $model = new PersonneModel($entityManager);
    $controller = new PersonneController($model);

    if(!empty($_GET['action']) && isset($_GET['action'])){

        if($_GET['action'] == "addPersonne"){
            $controller->addPersonne(); //controller
        }
        if($_GET['action'] == "savePersonne"){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            $controller->insertPersonne($nom,$prenom,$age); //controller
        }

         if($_GET['action'] == "updatePersonne"){
            $id = $_POST["id"];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $age = $_POST["age"];
            $controller->updatePersonne($id,$nom,$prenom,$age); //controller
         }  

        if(!empty($_GET['id']) && isset($_GET['id'])){
            if($_GET['action'] == "deletePersonne"){
                $controller->supprimerPersonne($_GET['id']); //controller
            }
            if($_GET['action'] == "modifierPersonne"){
                $controller->editPersonne($_GET['id']); //controller
            }
        }
    }else{
       $controller->getAllPersonne(); //controller
    }

?>