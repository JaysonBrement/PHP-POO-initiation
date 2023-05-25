<?php class Voiture{

private $marque;
private $modèle;
public $annee;
public $couleur;
public $vitesseactu;

public function __construct($marque,$modèle,$annee,$couleur,$vitesseactu){
    $this->marque = $marque;
    $this->modèle = $modèle;
    $this->année = $annee;
    $this->couleur = $couleur;
    $this->vitesseactu = $vitesseactu;
}



//Les setters permettent de faire des modifications
public function setMarque($marque){
    $this->marque = $marque;
}

public function setModèle($modèle){
    $this->modèle = $modèle;
}

public function setAnnee($annee){
    $this->annee = $annee;
}
public function setCouleur($couleur){
    $this->couleur = $couleur;
}
public function setVitesseactu($vitesseactu){
    $this->vitesseactu = $vitesseactu;
}
//Les getter permettent de modifier les attributs private et protected
public function getModèle(){return $this->marque;}
public function getMarque(){return $this->modèle;}
public function getAnnee(){return $this->annee;}
public function getCouleur(){return $this->couleur;}
public function getVitesseactu(){return $this->vitesseactu;}






    //Affichage
    public function affichage(){
        echo "$this->marque - $this->modèle - $this->annee - $this->couleur - $this->vitesseactu /kmh";
    }
    public function accélérer($accé){
        $this->vitesseactu=$this->vitesseactu+$accé;

    }

}

// PAS DACCENT JAMAIS PAS BIEN NUL BOUHOUU

?>