<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/connexion.css">

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
            <li><a href="" class = "page-selected">Connexion</a></li>
            <li><a href="./inscription.php">Inscription</a></li>
        </ul>
    </nav>
</header>  



<form action="auth.php" method="POST">

        <div class="mail-mdp">
            <div class="mail flex">
                <label for="mail">Email</label>
                <input type="email" name ="mail" id = "mail"  required >
            </div>
            <div class="mdp flex">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp"  required autocomplete="off">
            </div>
        </div>
        
        <div class="btns">
            <button type="submit" class ="btn-grad2"> Connexion </button>
            <button type="reset" class = "btn-grad">Annuler</button>
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