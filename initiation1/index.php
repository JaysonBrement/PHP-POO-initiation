<?php
require 'fonction.php';

class Personnage{
    public $nom;
    public $taille;
    public $age;

    public function __construct($name, $taille, $age){
        $this->nom=$name;
        $this->taille=$taille;
        $this->age=$age;

    }
    public function presentation(){
        echo "bonjour, je suis $this->nom ma taille est $this->taille cm et mon age est :$this->age ans";

    }
}
$personnage1 = new Personnage("mario",165,31);
$personnage2 = new Personnage("Luigi",165,35);
$personnage3 = new Personnage("Peach",160,30);

$personnage1->presentation();
echo "<h1><br/></h1>";
$personnage2->presentation();
echo "<h1><br/></h1>";
$personnage3->presentation();
echo "<h1><br/></h1>";





?>