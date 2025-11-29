<?php

    require_once "./model/database.php";

    function insertPersonne($nom, $prenom, $age){
        global $connexion;
        $sql = "INSERT INTO personne (nom, prenom, age) values 
        ('$nom', '$prenom', $age)";

        pg_query($connexion,$sql);

    }

?>