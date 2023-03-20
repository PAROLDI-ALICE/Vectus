<?php
require_once(__DIR__ . '/AnnoncesInfos.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/d4ade387aa.js" crossorigin="anonymous"></script>
    <title>Annonces</title>
</head>

<body>
    <header>
        <img src="./Images/logo.png" alt="voiture" />

        <div class="title">
            <h1>Vectus Enchères</h1>
        </div>

    </header>
    <nav>
        <div class="topnav">
            <a class="active" href="index.php"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="annonces.php">Annonces</a>
            <a class="compte" href="compte.php">Mon Compte</a>
            <a class="connexion" href="connexion.php">Connexion</a>
            </div>
    </nav>
    <div class="annonces">
    <img class="marteau" src = " ./Images/enchere.jpg" alt="marteau"/>

</div>
        <h2>Annonces</h2>
    <h3>Consulter les annonces</h3>
   <?php afficher() ?>
</body>

</html>