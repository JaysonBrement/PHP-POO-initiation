<?php
    require_once "Voiture.php";
    $v1 = new Voiture("Renault","Clio","Rouge",Voiture::NORMAL,18000);
    $v2 = new Voiture("Citroen","C3","Noir",Voiture::MINI,18000);
    $v2->setEstElectrique(true);

    for($i=0;$i<count(Voiture::$voitures);$i++){
        echo Voiture::$voitures[$i];
        echo "********************<br>";
    }

?>