<?php
    include_once 'header.php';
    if (!isset($_SESSION['user'])){
        header('location:connexion.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace 
        <?php if($_SESSION['user']['type'] == 0){ echo 'Etudiant';} else {echo 'Professeur';}?> 
    </title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/espace.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 

</head>
<body>

<?php

    // Si l'utilisateur est un etudiant
    if ($_SESSION['user']['type'] == 0) {
        require_once 'open-bdd.php';

        $sqlReq = "SELECT cours.nom, N.date, N.note FROM notes as N INNER JOIN cours ON N.id_cours = cours.id INNER JOIN membre ON N.id_eleve = membre.id WHERE membre.email = '". $_SESSION['user']['mail'] ."' ORDER BY cours.nom, N.date ;";
        $req = $bdd->query($sqlReq);
        $req->execute();
        $reponse = $req->fetchAll(); 
        $req->closeCursor();


        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Matière</th><th>Date de la note</th><th>Note</th>
                </tr> 
            </thead>";
        foreach ($reponse as $note){
            echo "<tr>";
            echo "<td>{$note['nom']}</td><td>{$note['date']}</td><td>{$note['note']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

         
    // Si l'utilisateur est un professeur
    if ($_SESSION['user']['type'] == 1) {
        require_once 'open-bdd.php';

        $sqlReq = "SELECT M2.nom, M2.prenom, N.date, N.note FROM notes as N 
        INNER JOIN cours_prof ON N.id_cours = cours_prof.id_cours 
        INNER JOIN membre ON cours_prof.id_prof = membre.id 
        INNER JOIN membre as M2 ON N.id_eleve = M2.id 
        WHERE membre.email = '".$_SESSION['user']['mail']."' ;";

        $req = $bdd->query($sqlReq);
        $req->execute();
        $reponse = $req->fetchAll(); 
        $req->closeCursor();
        
        // if ($reponse == false){}

        echo "<table>";
        echo "<thead>
                <tr>
                    <th>Eleve</th><th>Date de la note</th><th>Note</th>
                </tr> 
           </thead>";
        
        foreach($reponse as $note){
            $nom_prenom = strtoupper($note['nom']) . ' ' .ucfirst($note['prenom']);
            echo "<tr><td>{$nom_prenom}</td> <td>{$note['date']}</td><td>{$note['note']}</td></tr>";
        }
        
        echo "</table>";

    }


  


?>



<?php
    require_once 'footer.php';
?>



</body>
</html>

