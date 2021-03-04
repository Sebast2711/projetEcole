<?php
session_start ();

$user_type = '';


if (isset($_SESSION['user'])){
    
    if ($_SESSION['user']['type'] == 0){
        $user_type = 'Espace Etudiant';
    }
    else if ($_SESSION['user']['type'] == 1){
        $user_type = 'Espace Professeur';
    }
    else {
        $user_type = 'Espace Admin';
    }


  echo '
  <header>
    <nav class="navigation flex-row">
        <div class="brand">
            <img id="brand-logo" src="img/bear-logo.jpg" alt="logo-bear">
        </div>
                        
        <ul class="menu flex-row">
            <li><a href="index.php" id="index"> Accueil </a></li>
            <li><a href="espace.php" id ="espace">' . $user_type . '</a></li>
            <li><a href="contact.php" id ="contact"> Contact </a></li>
        </ul>

        <ul class = "login-signup flex-row">
            <li><a id ="connexion">'. $_SESSION['user']['nom']. ' '. $_SESSION['user']['prenom'] .'</a></li>
            <li><a href="deconnexion.php" >Deconnexion</a></li>
        </ul>
    </nav>
  </header> '  ;
}

else {

// supprimer des ancres si l'utilisateur n'est pas connecté

    echo '
    
<header>
<nav class="navigation flex-row">
    <div class="brand">
        <img id="brand-logo" src="img/bear-logo.jpg" alt="logo-bear">
    </div>
                    
    <ul class="menu flex-row">
        <li><a href="index.php" id="index"> Accueil </a></li>
        <li><a href="contact.php" id ="contact" > Contact </a></li>
    </ul>

    <ul class = "login-signup flex-row">
        <li><a href="connexion.php" id ="connexion" >Connexion</a></li>
        <li><a href="inscription.php" id ="inscription">Inscription</a></li>
    </ul>
</nav>
</header> ';
}

?>