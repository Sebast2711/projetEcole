<?php

    if (isset($_SESSION['user'])){
        
        if ($_SESSION['user']['type'] == 0){
            $user_type = 'Etudiant';
        }
        else if ($_SESSION['user']['type'] == 1){
            $user_type = 'Professeur';
        }
        else {
            $user_type = 'Admin';
        }

        echo '
        <footer class = "flex-row">
            <div class="adresse-copyright">
                <div class="adresse">
                    <p>124 Avenue de Stalingrad</p>
                    <p>92700 Colombes</p>
                </div>
                &copy;Sébastien OILLO
            </div>
            
            <ul class = "menu-footer flex-row">
                <li><a href="index.php" > Accueil </a></li>
                <li><a href="espace.php"> Espace  '. $user_type. '</a></li>
                <li><a href="contact.php"> Contact </a></li>
            </ul>        

        </footer>';
    }
    
    else{
        echo '
        <footer class = "flex-row">
            <div class="adresse-copyright">
                <div class="adresse">
                    <p>124 Avenue de Stalingrad</p>
                    <p>92700 Colombes</p>
                </div>
                &copy;Sébastien OILLO
            </div>
            
            <ul class = "menu-footer flex-row">
                <li><a href="" > Accueil </a></li>
                <li><a href="./contact.php"> Contact </a></li>
            </ul>      
        </footer>';
    }

    echo '<script src="js/currentpage.js"></script>';
    echo '<script src="js/hamburger.js"></script>';
    echo '<script src="js/brand-logo.js"></script>';


?>
