<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/inscription.css">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    

</head>
<body>


<?php
    include_once 'header.php';
    if (isset($_SESSION['user'])){
        header('location:index.php');
    }

    // Si il y a deja un mail correspondant à l'entrée de l'utilasateur alors pas d'enregistrement et affiche un message d'erreur 
    if(isset($_GET['dejainscrit'])){
        if ($_GET['dejainscrit'] === "coucou"){
            echo 'test qui marche';
        }   
    }
?>

<form action="auth_insc.php" method="post">
<div class="nom-prenom">
    <div class="nom flex">
        <label for="nom">Nom</label>
        <input type="text" name = "nom" id ="nom" >
    </div>
    <div class="prenom flex">
        <label for="prenom">Prenom</label>
        <input type="text" name = "prenom" id ="prenom" >    
    </div>
</div>
    
<div class="mail flex">
    <label for="mail">Adresse Email</label>
    <input type="email" name="mail" id="mail" >
</div>


<div class="mdp-mdp_conf">
    <div class="mdp flex">
        <label for="mdp">Mot de passe</label>
        <input type="text" name="mdp" id="mdp" >
    </div>
    
    <div class="mdp-conf flex">
        <label for="mdp">Confirmation</label>
        <input type="text" name="mdp-conf" id="mdp-conf" >
    </div>
</div>

<div class="msg flex">
    <label for="msg">Message</label>
    <textarea name="msg" id="msg"  rows="10" placeholder = "Qui êtes vous ?"></textarea>
</div>


<div class="btns flex-row" >
    <button type="submit" class="btn-grad2">S'inscrire</button>
    <button type="reset" class="btn-grad">Annuler</button>
</div>        
</form>




<?php
    require_once 'footer.php';
?>

</body>
</html>