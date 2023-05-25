<?php

class Sphere extends Cercle{
    public function __construct($diametre){
        parent::__construct($diametre);
    }

    public function aireSphere(){
        $result=4*pi()*($this->diametre/2)*2;
        return $result;
    }
    public function volumeSphere(){
        $result=4/3*pi()*pow(($this->diametre/2),3);
        return $result;
    }
    public function affichersphere($aire,$volume){
    echo "<br><br>****Sphere*****<br>.........................<br>";
    echo "Aire [" . $aire . "cm²]<br><br>";
    echo "Volume [" . $volume . "cm°3]";
    echo "<br><br>";
}
}
?>