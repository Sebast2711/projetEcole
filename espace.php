<?php
    include_once 'header.php';
    if (!isset($_SESSION['user'])){
        header('location:index.php');
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


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> 

</head>
<body>

<?php

    // Si l'utilisateur est un etudiant
    if ($_SESSION['user']['type'] == 0) {
        require_once 'open-bdd.php';

        $sqlReq = "SELECT cours.nom, N.date, N.note FROM note as N INNER JOIN cours ON N.id_cours = cours.id INNER JOIN membre ON N.id_eleve = membre.id WHERE membre.email = '". $_SESSION['user']['mail'] ."' ORDER BY cours.nom, N.date DESC ;";
        $req = $bdd->query($sqlReq);
        $req->execute();
        $reponse = $req->fetchAll(); 

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
        $req->closeCursor();
    }

         
    // Si l'utilisateur est un professeur
    if ($_SESSION['user']['type'] == 1) {
        require_once 'open-bdd.php';

        $sqlReq = "SELECT M2.nom, M2.prenom, N.date, N.note FROM note as N INNER JOIN cours_prof ON N.id_cours = cours_prof.id_cours INNER JOIN membre ON cours_prof.id_prof = membre.id INNER JOIN membre as M2 ON N.id_eleve = M2.id WHERE membre.email = '".$_SESSION['user']['mail']."' ;";
        $req = $bdd->query($sqlReq);
        $req->execute();
        $reponse = $req->fetchAll(); 
        
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

<?php
    require_once 'footer.php';
?>



</body>
</html>

