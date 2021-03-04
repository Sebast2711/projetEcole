<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/inscription.css">
    

</head>
<body>


<header>
    <nav class="navigation flex-row">
        <div class="brand">
            <img id="brand-logo" src="../img/bear-logo.jpg" alt="logo-bear">
        </div>
                
        <ul class="menu flex-row">
            <li><a href="../index.php"> Accueil </a></li>
            <li><a href="./espace.php"> Espace Etudiant </a></li>
            <li><a href="./contact.php"> Contact </a></li>
        </ul>

        <ul class = "login-signup flex-row">
            <li><a href="./connexion.php" >Connexion</a></li>
            <li><a href="" class = "page-selected">Inscription</a></li>
        </ul>
    </nav>
</header>  

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


</body>
</html>