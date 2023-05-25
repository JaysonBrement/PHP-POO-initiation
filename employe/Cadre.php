<?php

class Cadre extends Employe{
    private array $listeEmploye;
    
    public function __construct($nom,$prenom,$numSecu,$salaire,$job){
    parent::__construct($listeEmploye,$nom,$prenom,$numSecu,$salaire,$job);
    $this->listeEmploye=$listeEmploye;
    }
    
}



?>