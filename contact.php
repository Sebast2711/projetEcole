<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
   

</head>
<body>


<?php
    include_once 'header.php';
?>



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

<div class="objet flex">
    <label for="objet">Objet</label>
    <input type="text" name="objet" id="objet" >
</div>



<div class="msg flex">
    <label for="msg">Message</label>
    <textarea name="msg" id="msg"  rows="10" placeholder = "Votre message"></textarea>
</div>


<div class="btns flex-row" >
    <button type="submit" class="btn-grad2">Envoyer</button>
    <button type="reset" class="btn-grad">Annuler</button>
</div>        
</form>





<?php
    require_once 'footer.php';
?>

</body>
</html>