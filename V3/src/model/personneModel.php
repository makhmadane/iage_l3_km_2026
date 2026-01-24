<?php

class PersonneModel{

    private $entityManager;
    
    function __construct($entityManager){
        $this->entityManager = $entityManager;
    }

    function savePersonne($nom, $prenom, $age){
        $personne  = new Personne($nom,$prenom,$age);
        $this->entityManager->persist($personne);
         $this->entityManager->flush();
    }

    
  
    function allPersonne(){
      return $this->entityManager->getRepository('Personne')->findAll();
    }

     function getPersonneById($id){
        return  $this->entityManager->find('Personne',$id);
    }


    function deletePersonne($id){
      $personne = $this->getPersonneById($id);
      $this->entityManager->remove($personne);
      $this->entityManager->flush();
    }

     function UpdateForPersonne($id,$nom,$prenom,$age){
        $personne = $this->getPersonneById($id);
        $personne->setNom($nom);
        $personne->setPrenom($prenom);
        $personne->setAge($age);
        $this->entityManager->flush();
    }

}

?>