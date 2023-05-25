<?php
class Zombie extends Personnage{

    private $speed;
    private $morsure;

    public function __construct($nom,$classe,$attaque,$pv,$forceDuBien,$speed,$morsure){
        parent::__construct($nom,$classe,$attaque,$pv,$forceDuBien); 
        $this->speed = $speed;
        $this->morsure = $morsure;
    }
    public function __toString(){
        $text = parent::__toString();
        $text .= "Vitesse : " . $this->speed . " km/h.<br>";
        $text .= ($this->morsure) ? "J'ai infecté une personne." : "J'ai infecté aucune personne.";
        $text .= "<br>";
        return $text;
    }

}


?>