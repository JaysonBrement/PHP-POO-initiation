<?php

require_once 'Rectangle.php';
require_once 'TriangleRectangle.php';
require_once 'Cercle.php';
require_once 'pave.php';
require_once 'pyrebasetri.php';
require_once 'sphère.php';
    // **** rectangle ****

$r=1;
if($r==1){
    $rectangle1= new Rectangle(10,5);
    $rectangle1->afficherrectangle($rectangle1->CalculPerimetre(),$rectangle1->CalculAire(),$rectangle1->EstCarre());
}
    // **** triangle ****

$t=1;
if($t==1){
    $triangle1= new Triangle(15,10);
    $triangle1->affichertrianglerectangle($triangle1->PerimetreTriangleRect(),$triangle1->AireTriangleRect());
}
    // **** Cercle *****
$c=1;
if($c==1){
    $cercle1= new Cercle(25);
    $cercle1->affichercercle($cercle1->perimetreCercle(),$cercle1->aireCercle());
}
    // **** pave *******
$p=1;
if($p==1){
    $pave1=new Pave(15,10,5);
    $pave1->afficherpave($pave1->airePave(),$pave1->volumePave());
}
    // **** pyramide ****
$pb=1;
if($pb==1){
    $pyramide1=new Pyramide(33.5,38.5);
    $pyramide1->afficherpyramide($pyramide1->airePyramide(),$pyramide1->volumePyramide());
    // **** sphere ****
}
$sp=1;
if($sp==1){
    $sphere1=new Sphere(25);
    $sphere1->affichersphere($sphere1->aireSphere(),$sphere1->volumeSphere());
}


?>