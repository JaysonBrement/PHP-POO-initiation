<?php 
    require_once "voiture.php";

    $voiture1 = new Voiture("Ford","Mustang Shelby GT-500",1967,"gris métalisé",250);
    $voiture2 = new Voiture("Renault", "Supercinq",1984,"rouge",1000);

    // if(isset($_POST['modèle1'])){
    //     $voiture1->setModèle($_POST['modèle1']);
    // }
    // if(isset($_POST['marque1'])){
    //     $voiture1->setMarque($_POST['marque1']);
    // }
    // if(isset($_POST['annee1'])){
    //     $voiture1->setAnnee($_POST['annee1']);
    // }
    // if(isset($_POST['couleur1'])){
    //     $voiture1->setCouleur($_POST['couleur1']);
    // }
    // if(isset($_POST['vitesseactu1'])){
    //     $voiture1->setVitesseactu($_POST['vitesseactu1']);
    // }

    echo "<div>";
    $voiture1->affichage();
    echo "<br></br>";
    $voiture1->accélérer(25);
    $voiture1->affichage();
    echo "</div>";
    

    // //Formulaire pour modifier le Livre - avec les setters
    // echo "<form method='POST'>
    //     <label for='titre1'>Marque :</label>
    //     <input type='text' name='marque1' value=><br>

    //     <label for='auteur1'>Modèle :</label>
    //     <input type='text' name='modèle1' value=><br>

    //     <label for='annee1'>Année :</label>
    //     <input type='text' name='annee1' value=><br>
        
    //     <label for='annee1'>Couleur :</label>
    //     <input type='text' name='couleur1' value=><br>

    //     <label for='annee1'>Vitesse actuelle :</label>
    //     <input type='text' name='vitesseactu1' value=><br>

    //     <button type='submit'>Modifier la voiture</button>

    // </form>";