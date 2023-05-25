<?php

class Formation{
    private $intitulé;
    private $nbrjours;
    public static $stagiaire;

    public function __construct($intitulé,$nbrjours){
        $this->intitulé = $intitulé;
        $this->nbrjours = $nbrjours;

        self::$formation[]=$this;
    }
    //get
    public function getIntitulé(){return $this->intutulé;}
    public function getNbrjours(){return $this->nbrjours;}
    //set
    public function setIntitulé($intitulé){
        $this->intitulé = $intitulé;
    }
    public function setNbrjours($nbrjours){
        $this->nbrjours = $nbrjours;
    }

}

?>