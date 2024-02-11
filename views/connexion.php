<?php

include '../Controller/ConnexController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="inscription">
        <div class="top">
            <h1>Se connecter</h1>
            <img src="meetic.jpg" alt="Logo meetic" />
        </div>
        <p>Vous avez déjà un compte ? Connectez-vous !</p>
        <form action="?action=connexion" method="post">
            <div>
                <label for="email">Votre e-mail &nbsp; @gmail.com</label>
                <input type="text" id="email" name="email" placeholder="monadresse@mail.com" required>
            </div>
            <div>
                <label for="mdp">Votre mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder="monmotdepasse" required>
            </div>
            <div>
                <button type="submit">Se connecter</button>
            </div>
        </form>
        <div class="connexion">
            <a href="modification.php" class="connexion-button">Modifier mon compte</a><br>
        </div><br>

        <div class="connexion">
            <label for="sujet">Vous n'avez pas de compte ?<br></label>
            <a href="inscription.php" class="connexion-button">S'inscrire</a><br>
        </div><br>

        <div class="connexion">
        <label for="sujet">En quête d'amour ?<br></label>
            <a href="Recherche.html" class="connexion-button">Rechercher un compte</a><br>
        </div>
    </div>
</body>
</html>