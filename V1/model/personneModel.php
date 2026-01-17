<?php

    require_once "./model/database.php";

    function savePersonne($nom, $prenom, $age){
        global $connexion;
        $sql = "INSERT INTO personne (nom, prenom, age) values 
        ('$nom', '$prenom', $age)";

        pg_query($connexion,$sql);

    }

    function allPersonne(){
         global $connexion;
         $sql = "SELECT * FROM personne";
         $result = pg_query($connexion,$sql);
         return pg_fetch_all($result) ;
    }

     function getPersonneById($id){
         global $connexion;
         $sql = "SELECT * FROM personne where id = $id";
         $result = pg_query($connexion,$sql);
         return pg_fetch_all($result)[0] ;
    }


    function deletePersonne($id){
         global $connexion;
         $sql = "DELETE FROM personne where id = $id";
         pg_query($connexion,$sql);
    }

     function UpdateForPersonne($id,$nom,$prenom,$age){
         global $connexion;
         $sql = "UPDATE personne SET nom ='$nom', prenom = '$prenom', age =$age
          where id = $id";
         pg_query($connexion,$sql);
    }

?>