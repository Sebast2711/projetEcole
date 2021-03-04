<?php
session_start();


require_once 'open-bdd.php';


// Test du resultat du formulaire

$mail = '';
$mdp = '';

if (isset($_POST['mail'])){
    $mail = htmlentities($_POST['mail']);
}
if (isset($_POST['mdp'])){
    $mdp = htmlentities($_POST['mdp']);
}




// Requete SQL qui prend tous les champs qui correspond à l'adresse mail et au mot de passe

$sqlReq = "SELECT * FROM membre WHERE email='" .$mail ."' AND mdp = '". $mdp . "'   ;";


$req = $bdd->query($sqlReq);
$req->execute();
// $reponse = $req->fetchAll(); 

$reponse = $req->fetch();



if (count($reponse) != 0){    
    if ($mail == $reponse['email'] && $mdp == $reponse['mdp']){
        $_SESSION['user'] = [
            "id" => $reponse['id'],
            "nom" => $reponse['nom'],
            "prenom" => $reponse['prenom'],
            "mail" => $reponse['email'],
            "mdp" => $reponse['mdp'],
            "type" => $reponse ['type'],
            "genre" => $reponse['genre']
        ];
        // Reussite ==> Redirection vers verifie.php 
        header('location:index.php');

        var_dump ($_SESSION['user']);

    }
    else {
        // Echec ==> Redirection vers erreur.php
        header('location:erreur.php');
    }
}
else {
        // Echec ==> Redirection vers erreur.php
        header('location:erreur.php');
}


$req->closeCursor ();

?>