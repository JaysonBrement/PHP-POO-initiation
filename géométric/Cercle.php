<?php

class Cercle{
    protected $diametre;



    public function __construct($diametre){

        $this->diametre = $diametre;
    }

    public function perimetreCercle(){
        $result=round(2*($this->diametre/2)*pi(),3);
        return $result;
    }
    
    public function aireCercle(){
        $result = round((pow(($this->diametre/2),2))*pi(),3);
        return $result;

    }
    public function affichercercle($perimetre,$aire){
    echo "<br><br>****Cercle*****<br>.........................<br>";
    echo "Diamètre [" . $this->diametre . "cm]<br><br>";
    echo "Périmètre [" . $perimetre . "cm]";
    echo "<br><br>";
    echo "Aire [" . $aire . "cm²]";
}
}

?>