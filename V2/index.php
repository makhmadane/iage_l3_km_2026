<?php
    require_once "./view/header.php";
    require_once "./model/database.php";
    require_once "./model/personneModel.php";
    require_once "./controller/personneController.php";
    
    $database = new Database();
    $model = new PersonneModel($database->get_Connexion());
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