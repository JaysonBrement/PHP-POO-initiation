<?php

class Pave extends Rectangle{
    protected $hauteur;

    public function __construct($hauteur,$longueur,$largeur){
        parent::__construct($longueur,$largeur);
        $this->hauteur = $hauteur;
    }
    //getter
    public function getHauteur(){return $this->hauteur;}
    ///////////////////////////////////////////

    public function airePave(){ 
        $result=2*(($this->longueur*$this->largeur)+($this->longueur*$this->hauteur)+($this->largeur*$this->hauteur));
        return $result;
    }
    public function volumePave(){
        $result=$this->longueur*$this->largeur*$this->hauteur;
        return $result;
    }

    public function afficherpave($aire,$volume){
        echo "<br><br>****PAVE DROIT*****<br>.........................<br>";
    echo "Longueur [" . $this->longueur . "cm]<br><br> Largeur [" . $this->largeur . "cm]<br><br> Largeur [" . $this->hauteur . "cm]<br><br>";
    echo "Aire [" . $aire . "cm ²]";
    echo "<br><br>";
    echo "Volume [" . $volume . "cm°3]";
    echo "<br><br>";
    }
}

?>