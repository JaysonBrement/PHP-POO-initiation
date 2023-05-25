<?php
require_once "Personnage.php";
require_once "Humain.php";
require_once "Zombie.php";

$personnage1 = new Humain("Dean","Guerrier",10,100,true,2);
$personnage2 = new Humain("Sam","Archer",5,50,true,3);
$personnage3 = new Humain("Bobby","Archer",5,55,false,2);
$personnage4 = new Humain("John","Voleur",2,10,false,1);
$personnage5 = new Zombie("Daryl","Marcheur",5,40,false,5,false);
$personnage6 = new Zombie("Dixon","Claqueur",10,80,false,15,true);

echo $personnage1;
echo "<br>********************************<br><br>";
echo $personnage2;
echo "<br>********************************<br><br>";
echo $personnage3;
echo "<br>********************************<br><br>";
echo $personnage4;
echo "<br>********************************<br><br>";
echo $personnage5;
echo "<br>********************************<br><br>";
echo $personnage6;

?>