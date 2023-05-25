<?php

class Pyramide  extends Rectangle{
        private $hauteur;
        public function __construct($longueur,$hauteur){
        parent::__construct($longueur,$hauteur);
        $this->hauteur=$hauteur;
        
    }
    public function airePyramide(){
        $result=((1/2)*$this->longueur*$this->hauteur)*4;
        return $result;
    }
    public function volumePyramide(){
        $result=(((1/2)*$this->longueur*$this->hauteur)/3)*$this->hauteur;
        return $result;
    }
    public function afficherpyramide($aire,$volume){
        echo "<br><br>****pyramide base tri equilateral*****<br>.........................<br>";
    echo "Aire [" . $aire . " cm ²]";
    echo "<br><br>";
    echo "Volume [" . $volume . " cm°3]";
    echo "<br><br>";
    }
}


?>