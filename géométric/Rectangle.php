<?php

class Rectangle{

    protected $longueur;
    protected $largeur;

    public function __construct($longueur,$largeur){
        $this->largeur=$largeur;
        $this->longueur=$longueur;
        

    }
    public function CalculPerimetre(){
        $result=($this->largeur+$this->longueur)*2;
        return $result;
    }
    public function CalculAire(){
        $result=($this->largeur*$this->longueur);
        return $result;
    }
    public function EstCarre(){
        if($this->largeur=$this->longueur){
            $result=true;
        }else{
            $result=false;
        }
        return $result;
    }
    
    public function afficherrectangle($perimetre,$aire,$carre){
        echo "<br><br>****Rectangle*****<br>.........................<br>";
    echo "Longueur [" . $this->longueur . "cm]<br><br> Largeur [" . $this->largeur . "cm]<br><br>";
    echo "Périmètre [" . $perimetre . "cm]";
    echo "<br><br>";
    echo "Aire [" . $aire . "cm²]";
    echo "<br><br>";
    if ($carre==true){
        echo "C'est un carré";
    }else{
        echo "Ce n'est pas un carré";
    }
    }
    
    
    //setter
    public function setLargeur($largeur){
        $this->largeur = $largeur;
    }
    public function setLongueur($longueur){
        $this->longueur = $longueur;
    }
    //getter
    public function getLongueur(){return $this->longueur;}
    public function getLargeur(){return $this->largeur;}
    


    
}
?>