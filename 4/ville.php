<?php

class Ville{
    private $nom;
    private $departement;   
   
   
   public function __construct($nom,$departement){
       $this->nom = $nom;
       $this->departement =$departement; 
   }

public function affichage(){
    echo "$this->nom | $this->departement";
}


//setter

public function setNom($nom){
    $this->nom = $nom;
}
public function setDepartement($departement){
    $this->departement = $departement;
}
//getter
public function getNom(){return $this->nom;}
public function getDepartement(){return $this->departement;}
}




?>