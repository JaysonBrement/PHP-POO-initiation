<?php

class Stagiaire{
    private $nom;
    private $notes=[];
    
   
   
   public function __construct(string $nom,array $notes){
       $this->nom = $nom;
       $this->notes =$notes;
   }
//    public function CalculerMoyenne(){
//        $somme=0;
//        $div=0;
//        $result=0;
//        foreach($this->notes as $key=>$value){
//            $somme=$somme+$value;
//            $div++;
//        }
//         $result=$somme/$div;
//         echo "moyenne : $result";
//    }
//    public function TrouverMax(){
//        $max=0;
//        $temp=0;
//        foreach($this->notes as $key=>$value){
//            $temp=$value;
//            if ($temp>$max){
//                $max=$temp;
//            }
//        }
//        echo "la note maximum est $max";
//    }
   
   
//    public function TrouverMin(){
//        $min=0;
//        $temp=0;
//        foreach($this->notes as $key=>$value){
//            $temp=$value;
//            if($min==0){
//                $min=$value;
//            }
//            if($temp<$min){
//                $min=$temp;
//            }
//        }
//        echo "la note minimum est $min";
//    }
//    public function affichage(){
//        echo "$this->nom |";
//        foreach($this->notes as $key=>$value){
//            echo "$value - ";
//        }
//    }
   
   
   //setter
   
   public function setNom($nom){
       $this->nom = $nom;
   }
   public function setNotes($notes){
       $this->notes = $notes;
   }
   //getter
   public function getNom(){return $this->nom;}
   public function getNotes(){return $this->notes;}
   
   
   
   
   }
?>