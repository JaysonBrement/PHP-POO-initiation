<?php

    class Voiture{
        private $marque;
        private $modele;
        private $couleur;
        private $nbPortes;
        private $estElectrique;
        private $prixTTC;

        public static $voitures;

        const MINI = 3;
        const NORMAL = 5;
        const TVA = 20;

        public function __construct($marque,$modele,$couleur,$nbPortes,$prixHT){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->couleur = $couleur;
            $this->nbPortes = $nbPortes;

            $this->estElectrique = false;
            $this->prixTTC = $prixHT + $prixHT *self::TVA/100;

            self::$voitures[] = $this;
        }
        public function getMarque(){return $this->marque;}
        public function getModele(){return $this->modele;}
        public function getCouleur(){return $this->couleur;}
        public function getNbPortes(){return $this->nbPortes;}
        public function getEstElectrique(){return $this->estElectrique;}
        public function getPrix(){return $this->prixTTC;}

        public function setMarque($marque){$this->marque = $marque;}
        public function setModele($modele){$this->modele = $modele;}
        public function setCouleur($couleur){$this->couleur = $couleur;}
        public function setNbPortes($nbPortes){$this->nbPortes = $nbPortes;}
        public function setEstElectrique($estElectrique){$this->estElectrique = $estElectrique;}
        public function setPrix($prixTTC){$this->prixTTC = $prixTTC;}

        public function __toString(){

            $txt = "";
            $txt .= "Marque : " .$this->marque . "<br>";
            $txt .= "Modele : " .$this->modele . "<br>";
            $txt .= "Couleur : " .$this->couleur . "<br>";
            $txt .= "nbPortes : " .$this->nbPortes . "<br>";
            $txt .= "Prix TTC : " .$this->prixTTC . "<br>";
            if($this->estElectrique){
                $txt .= "La voiture est électrique <br>";
            }else{
                $txt .= "La voiture n'est pas électrique <br>";
            }
        return $txt;
        }






    }

 ?>