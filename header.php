<?php
session_start ();

$user_type = '';
$user_gender = '';


if (isset($_SESSION['user'])){   


    if ($_SESSION['user']['type'] == 0){
        $user_type = 'Espace Etudiant';
    }
    else if ($_SESSION['user']['type'] == 1){
        $user_type = 'Espace Professeur';
    
        if ($_SESSION['user']['genre'] == 'M'){
            $user_gender = 'M';
        }
        else if ($_SESSION['user']['genre'] == 'F'){
            $user_gender = 'F';
        }
    
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
                   
        <i id="hamburger-icon" class="fas fa-bars"></i>

        <ul class= "flex-row menu">
            <li><a href="index.php" id="index"> Accueil </a></li>
            <li><a href="espace.php" id ="espace">' . $user_type . '</a></li>
            <li><a href="contact.php" id ="contact"> Contact </a></li>
        
            <li><a id ="connexion">'. $user_gender .' ' .strtoupper($_SESSION['user']['nom']). ' '. ucfirst($_SESSION['user']['prenom']) .'</a></li>
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
                
        
        <i id="hamburger-icon" class="fas fa-bars"></i>

        <ul class= "flex-row menu">
            <li><a href="index.php" id="index"> Accueil </a></li>
            <li><a href="contact.php" id ="contact" > Contact </a></li>

            <li><a href="connexion.php" id ="connexion" >Connexion</a></li>
            <li><a href="inscription.php" id ="inscription">Inscription</a></li>
        </ul>
    </nav>
</header> ';
}

?>