<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/inscription.css">
    

</head>
<body>


<?php
    include_once 'header.php';
?>



<form action="" method="post">
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
    <label for="mail">Objet</label>
    <input type="email" name="mail" id="mail" >
</div>



<div class="msg flex">
    <label for="msg">Message</label>
    <textarea name="msg" id="msg"  rows="10" placeholder = "Votre message"></textarea>
</div>


<div class="btns flex-row" >
    <button type="submit" class="btn-grad2">Envoyer</button>
    <button type="reset" class="btn-grad">Annuler</button>
</div>        
</form>




    <footer class = "flex-row">
    <div class="adresse-copyright">
        <div class="adresse">
            <p>124 Avenue de Stalingrad</p>
            <p>92700 Colombes</p>
        </div>
    
        &copy;Sébastien OILLO
    </div>
    
    <ul class = "menu flex-row">
        <li><a href="" > Accueil </a></li>
        <li><a href="./espace.php"> Espace Etudiant </a></li>
        <li><a href="./contact.php"> Contact </a></li>
    </ul>        

</footer>

<?php
    require_once 'footer.php';
?>

</body>
</html>