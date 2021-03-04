<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">

</head>
<body>

<header>
    <nav class="navigation flex-row">
        <div class="brand">
            <img id="brand-logo" src="./img/bear-logo.jpg" alt="logo-bear">
        </div>
                
        <ul class="menu flex-row">
            <li><a href="" class = "page-selected"> Accueil </a></li>
            <li><a href="./php/espace.php"> Espace Etudiant </a></li>
            <li><a href="./php/contact.php"> Contact </a></li>
        </ul>

        <ul class = "login-signup flex-row">
            <li><a href="./php/connexion.php">Connexion</a></li>
            <li><a href="./php/inscription.php">Inscription</a></li>
        </ul>
    </nav>
</header>    


<main>
    <div class="discover">
        <div class="shadow-bg">
            <h2>Découvrez notre université</h2>
        </div>
    </div>

    <div class="news">
        <h2>Les nouveautées</h2>
        <!-- Cards -->
    </div>

</main>


</body>
</html>