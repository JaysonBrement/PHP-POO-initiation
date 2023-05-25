<?php

class Triangle {
    private $base;
    private $hauteur;

    public function __construct($base,$hauteur){
        $this->base = $base;
        $this->hauteur = $hauteur;
    }
    public function PerimetreTriangleRect(){
        $hyp = sqrt(pow($this->hauteur,2)+ pow($this->base,2));
        $result = $this->hauteur+$this->base+$hyp;
        return $result;
    }
    public function AireTriangleRect(){
        $result =($this->hauteur * $this->base)/2;
        return $result;
    }
    public function affichertrianglerectangle($perimetre,$aire){
        echo "<br><br>****Triangle*****<br>.........................<br>";
    echo "Base [" . $this->base . "cm]<br><br> Hauteur [" . $this->hauteur . "cm]<br><br>";
    echo "Périmètre [" . $perimetre . "cm]";
    echo "<br><br>";
    echo "Aire [" . $aire . "cm²]";
    echo "<br><br>";
    }
        //setter
        public function setBase($base){
            $this->base = $base;
        }
        public function setHauteur($hauteur){
            $this->hauteur = $hauteur;
        }
        //getter
        public function getBase(){return $this->base;}
        public function getHauteur(){return $this->hauteur;}
}


?>