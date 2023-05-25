<?php

require_once 'ville.php';

$ville1=new Ville('Calais','Moyen Orient');
$ville1->affichage();
$machin=$ville1->getDepartement();
echo "<br></br>$machin";
$truc='Nord';
$ville1->setDepartement($truc);
$machin=$ville1->getDepartement();
echo "<br></br>$machin";

?>