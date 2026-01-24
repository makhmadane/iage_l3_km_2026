<?php
// src/Product.php
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'personnes')]
class Personne
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string')]
    private string $nom;

    #[ORM\Column(type: 'string')]
    private string $prenom;

    #[ORM\Column(type: 'integer')]
    private int $age;

    function __construct($nom,$prenom,$age){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    function getId(){
        return $this->id ;
    }
     function getNom(){
        return $this->nom ;
    }
     function getPrenom(){
        return $this->prenom;
    }
     function getAge(){
        return $this->age ;
    }

    function setNom($nom){
        $this->nom = $nom;
    }
      function setPrenom($prenom){
        $this->prenom = $prenom;
    }
      function setAge($age){
        $this->age = $age;
    }
}