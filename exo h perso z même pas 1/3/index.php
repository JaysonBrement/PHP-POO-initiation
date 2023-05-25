<?php
    require_once "Personnage.php";
    require_once "Humain.php";
    require_once "zombie.php";
    $personnage1 = new Humain("Toto","Guerrier",10,100,true,2);
    $personnage2 = new Humain("Tata","Archère",5,50,true,3);
    $personnage3 = new Humain("Titi","Archère",5,55,false,2);
    $personnage4 = new Humain("Riri","Voleur",2,10,false,1);


    
    
    
    echo $personnage1;
    echo "*************************<br>";
    echo $personnage2;
    echo "*************************<br>";
    echo $personnage3;
    echo "*************************<br>";
    echo $personnage4;
    echo "*************************<br>";
    echo "Voici les stats de " .  $personnage1->nom . " : <br>";
    $personnage1->modifStats(50,200);


 ?>