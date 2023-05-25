<?php

class Personne{
    private $nom;
    private $prenom;
    private $adresse;
    
public function __construct($nom,$prenom,$adresse){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->adresse = $adresse;
}
public function affichage(){
    echo "je suis $this->nom $this->prenom, j'habite ici :$this->adresse";
}
//setter

public function setNom($nom){
    $this->nom = $nom;
}
public function setAdresse($adresse){
    $this->adresse = $adresse;
}
public function setPrenom($prenom){
    $this->prenom = $prenom;
}
//getter
public function getNom(){return $this->nom;}
public function getPrenom(){return $this->prenom;}
public function getAdresse(){return $this->adresse;}
}



?>