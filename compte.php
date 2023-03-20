<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d4ade387aa.js" crossorigin="anonymous"></script>
    <title>Mon compte</title>
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
        </div>
    </nav>
    <form action="post.users.php" method="POST">
        <link rel="stylesheet" href="style.css">
        <h2>Créer un compte</h2>

        <label class="compte">Nom :</label>
        <br />
        <input name="lastname" type="text" placeholder="votre nom">
        </input>
        <label class="compte">Prénom :</label>
        <br />
        <input name="firstname" type="texte" placeholder="votre prénom">
        </input>
        <label class="compte">Email :</label>
        <br />
        <input name="email" type="texte" placeholder="votre email">
        </input>
        <label class="compte">Mot de passe :</label>
        <br />
        <input name="password" type="password" placeholder="votre mot de passe">
        </input>
        <button class="buttonSub">valider</button>
    </form>





</body>

</html>