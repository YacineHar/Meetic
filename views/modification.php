<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion du compte</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="inscription">
    <div class="top">
        <h1>Modifier Informations</h1>
        <img src="meetic.jpg"alt="Logo meetic" />
    </div>
        <form action="../Controller/ModifController.php" method="post">
        <div>
            <label for="email">Votre e-mail</label>
            <input type="text" id="email" name="email" placeholder="monadresse@mail.com" required>
        </div>

        <div>
            <label for="new_email">Votre nouvel e-mail</label>
            <input type="text" id="new_email" name="new_email" placeholder="votrenouvelleadresse@mail.com" required>
        </div>

        <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nouveau nom" required>
        </div>

        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre nouveau prénom" required>
        </div>

        <div>
            <label for="date">Birthdate</label>
            <input type="date" id="date" name="date" value="2002-09-10" min="1900-01-01" max="2006-01-01" />
        </div>

        <div>
            <label for="genre">Quel est votre genre ?</label>
            <select name="genre" id="genre" required>
            <option value="" disabled selected hidden>Choisissez votre genre</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre...</option>
            </select>
        </div>

        <div>
            <label for="ville">Votre ville</label>
            <input type="text" id="ville" name="ville" placeholder="Paris" required>
        </div>

        <div>
            <label for="confirm">Votre nouveau mot de passe</label>
            <input type="password" id="confirm" name="confirm" placeholder="monnouveaumotdepasse" required>
        </div>

        <button type="submit">Modifier</button>

        <div class="connexion">
            <label for="connexion">Vous n'avez pas de compte ?</label>
            <a href="inscription.php" class="connexion-button">S'inscrire</a><br>
        </div>

        <div class="connexion">
            <label for="connexion">Vous voulez simplement vous connecter ?</label>
            <a href="connexion.php" class="connexion-button">Se connecter</a><br>
        </div>

        </form>
        
</div>
</body>
</html>