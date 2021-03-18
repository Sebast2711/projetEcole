<?php
    // var_dump($_POST);

    require_once 'open-bdd.php';

    
    $sqlReq = "SELECT * FROM membre WHERE email='" .$_POST['mail'] ."' ;";
    $req = $bdd->query($sqlReq);
    $req->execute();
    $reponse = $req->fetchAll(); 
    $req->closeCursor();

    if (count($reponse) > 0){
        // Cas ou le mail est deja présent dans la base de données
        // header('location:./inscription.php?dejainscrit=coucou');
        echo 'existe';
    }

    else{
        // Cas ou le mail n'est pas deja dans la base de données
        echo 'vide'; 

        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['mdp']) && !empty($_POST['mdp-conf'])){
            // Aucun champs n'est vide

            // regex nom et prenom
            // ^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð-]{1,25}$

            // regex email
            // ^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+.[a-zA-Z]+$

            // regex mot de passe
            // https://stackoverflow.com/questions/19605150/regex-for-password-must-contain-at-least-eight-characters-at-least-one-number-a


            
            if ($_POST['mdp'] === $_POST['mdp-conf']){
                echo 'le mot de passe correspond';
            }
            else {
                echo 'le mot de passe ne correspond pas';
            }
        
        
        }
        else {
            header ('location:./inscription.php');
        }

        // Faire les tests de verification avec empty
            // Faire les tests de verification avec les regx
                // Comparer le mot de passe et la confirmation du mot de passe



      
    
    }
    
    

 
    

?>


<?php


// Code pour plus tard


  // try {
        //     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //     $sql = "INSERT INTO membre (nom, prenom, email, mdp, type, genre) VALUES ('OO','SEdddddB', 'oad@mail.com', 12345, 0, 'M');";
        //     $bdd->exec($sql);

        //     // Redirection sur la page d'accueil en étant connecté
        //     echo "<br>Nouvel enregistrement créé<br>";
        //     header ('location:.index.php');
        //     $_SESSION['user'] = [
        //         "nom" => $reponse['nom'],
        //         "prenom" => $reponse['prenom'],
        //         "mail" => $reponse['email'],
        //         "mdp" => $reponse['mdp'],
        //         "type" => $reponse ['type'],
        //         "genre" => $reponse['genre']
        //     ];

        // } 
        // // Si un probleme se produit
        // catch(PDOException $e) {
        //     echo '<br>Problemes<br>';
        //     echo $sql . "<br>" . $e->getMessage();
        
        //     header ('location:./erreur.php');
        // }

?>