<?php

class Employe {
    protected string $nom;
    protected string $prenom;
    protected string $numSecu;
    protected float $salaire;
    protected string $job;


    public function __construct($nom,$prenom,$numSecu,$salaire,$job){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->numSecu=$numSecu;
        $this->salaire=$salaire;
        $this->job=$job;
    } 
    public function __tostring(){
        return "Nom: " . $this->nom .
        "<br> Prenom: " . $this->prenom . 
        "<br> Secu : " . $this->numSecu . 
        "<br> salaire : " . $this->salaire .
        "<br> job : " . $this->job;
    }

}


?>