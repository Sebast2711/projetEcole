<?php
    session_start();
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
    <link rel="stylesheet" href="./css/footer.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 

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
        <!-- A faire en php ensuite -->
        <div class="cards">
            <div class="card">
                <div class="card-info">
                    <h3>Formations</h3>
                </div>
                <div class="card-img">
                    <img src="./img/licence-info.jpg" alt="licence-info">                    
                </div>
                <div class="card-title">
                    <h3>Etudes après une licence informatique</h3>
                </div>
                <div class="card-desc">
                    <p>Découvrez les possibilitées d’étude à la suite de votre licence informatique</p>
                </div>
            </div>
        
            <div class="card">
                <div class="card-info">
                    <h3>Formations</h3>
                </div>
                <div class="card-img">
                    <img src="./img/licence-bio.jpg" alt="licence-bio">                    
                </div>
                <div class="card-title">
                    <h3>Etudes après une licence de biologie</h3>
                </div>
                <div class="card-desc">
                    <p>Découvrez les possibilitées d’étude à la suite de votre licence de biologie</p>
                </div>
            </div>

            <div class="card">
                <div class="card-info">
                    <h3>Métiers</h3>
                </div>
                <div class="card-img">
                    <img src="./img/big-data.jpg" alt="big-data">                    
                </div>
                <div class="card-title">
                    <h3>Métiers après un master Big Data</h3>
                </div>
                <div class="card-desc">
                    <p>Découvrez les possibilitées de métiers à la suite de votre master Big Data</p>
                </div>
            </div>


            <div class="card">
                <div class="card-info">
                    <h3>Informations </h3>
                </div>
                <div class="card-img">
                    <img src="./img/crous.jpg" alt="crous">                    
                </div>
                <div class="card-title">
                    <h3>Les demandes de bourses sont ouvertes</h3>
                </div>
                <div class="card-desc">
                    <p>Les demandes de bourses sont ouvertes. N’oubvliez pas de faire vos demandes avant le 18/09</p>
                </div>
            </div>

            <div class="card">
                <div class="card-info">
                    <h3>Formations</h3>
                </div>
                <div class="card-img">
                    <img src="./img/licence-info.jpg" alt="licence-info">                    
                </div>
                <div class="card-title">
                    <h3>Etudes après une licence informatique</h3>
                </div>
                <div class="card-desc">
                    <p>Découvrez les possibilitées d’étude à la suite de votre licence informatique</p>
                </div>
            </div>
        
            <div class="card">
                <div class="card-info">
                    <h3>Formations</h3>
                </div>
                <div class="card-img">
                    <img src="./img/licence-bio.jpg" alt="licence-bio">                    
                </div>
                <div class="card-title">
                    <h3>Etudes après une licence de biologie</h3>
                </div>
                <div class="card-desc">
                    <p>Découvrez les possibilitées d’étude à la suite de votre licence de biologie</p>
                </div>
            </div>

            <div class="card">
                <div class="card-info">
                    <h3>Métiers</h3>
                </div>
                <div class="card-img">
                    <img src="./img/big-data.jpg" alt="big-data">                    
                </div>
                <div class="card-title">
                    <h3>Métiers après un master Big Data</h3>
                </div>
                <div class="card-desc">
                    <p>Découvrez les possibilitées de métiers à la suite de votre master Big Data</p>
                </div>
            </div>


            <div class="card">
                <div class="card-info">
                    <h3>Informations </h3>
                </div>
                <div class="card-img">
                    <img src="./img/crous.jpg" alt="crous">                    
                </div>
                <div class="card-title">
                    <h3>Les demandes de bourses sont ouvertes</h3>
                </div>
                <div class="card-desc">
                    <p>Les demandes de bourses sont ouvertes. N’oubvliez pas de faire vos demandes avant le 18/09</p>
                </div>
            </div>

        
        </div>
    </div>
</main>



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
        <li><a href="./php/espace.php"> Espace Etudiant </a></li>
        <li><a href="./php/contact.php"> Contact </a></li>
    </ul>        

</footer>




</body>
</html>