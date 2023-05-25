<?php

require_once 'Stagiaire.php';

$stagiaire1 = new Stagiaire('roger',array(15,215,445));
echo "<div>";
$stagiaire1->affichage();
echo "</div>";
$stagiaire1->CalculerMoyenne();
echo "<br></br>";
$stagiaire1->TrouverMax();
echo "<br></br>";
$stagiaire1->TrouverMin();
echo "bonjour je fonctionne";

?>