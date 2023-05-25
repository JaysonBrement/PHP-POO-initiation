<?php

require_once 'personne.php';

$personne1= new Personne('BICHE','Jean','33 rue des trottoires');

echo "<form method='POST'>
<label for='titre1'>nom :</label>
<input type='text' name='nom1' value=''><br>

<label for='auteur1'>prenom :</label>
<input type='text' name='prenom1' value=''><br>

<label for='annee1'>adresse :</label>
<input type='text' name='adresse1' value=''><br>

<button type='submit'>Modifier la personne</button>

</form>";
if(isset($_POST['nom1']) and ($_POST['nom1'])!=""){
        $personne1->setNom($_POST['nom1']);
    }
    if(isset($_POST['prenom1']) and ($_POST['prenom1'])!=""){
         $personne1->setPrenom($_POST['prenom1']);
    }
    if(isset($_POST['adresse1']) and ($_POST['adresse1'])!=""){
         $personne1->setAdresse($_POST['adresse1']);
    }
    $personne1->affichage();

?>