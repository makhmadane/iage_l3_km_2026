<?php

$serveur="localhost";
$port = "5432";
$user="postgres";
$pwd="passer";
$dbname="gestion_iage_3_km_2026";
            
$connexion = pg_connect("host=$serveur port=$port dbname=$dbname user=$user password=$pwd");

if(!$connexion){
    echo "Erreur de connexion";
}else{
   echo "succes";
}

