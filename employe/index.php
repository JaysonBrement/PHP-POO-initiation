<?php

require_once 'Employe.php';
require_once 'Cadre.php';

$employe1 = new Employe('Neymar','Jean','1850389546458',1500.56,'soudeur');
$employe2 = new Employe('Jeremy','Simon','179028955812',1700.47,'assistant mécanicien');
$employe3 = new Employe('Deray','Odile','285097154678',1900.14,'magasinière');

echo $employe1;
echo "<br><br>";
echo $employe2;
echo "<br><br>";
echo $employe3;



?>