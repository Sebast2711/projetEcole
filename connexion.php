<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/connexion.css">

</head>
<body>


<?php
    require_once 'header.php';
?>

<?php
    if (isset($_SESSION['user'])){
        header('location:index.php');
    }
?>

        
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
    



<?php
    require_once 'footer.php';
?>

</body>
</html>