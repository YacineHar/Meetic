<?php

include '../Controller/InscriptController';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="inscription">
        <div class="top">
        <h1>S'inscrire</h1>
        <img src="meetic.jpg"alt="Logo meetic" />
        </div>
        <p>Vous n'arrivez pas à trouver l'amour ? Inscrivez vous !</p>
        <form action="?action=inscription" method="post">
            <div>
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            </div>
        <div>
            <label for="prenom">Votre prénom</label>
            <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom" required>
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
            <label for="email">Votre e-mail &nbsp; @gmail.com</label>
            <input type="text" id="email" name="email" placeholder="monadresse@mail.com" required>
        </div>
        <div>
            <label for="mdp">Votre mot de passe</label>
            <input type="text" id="mdp" name="mdp" placeholder="monmotdepasse" required>
        </div>
        <fieldset>
            <legend>Choisissez vos loisirs</legend>
            <div>
              <input type="checkbox" id="sport" name="sport" checked />
              <label for="sport">sport</label>
            </div>
            <div>
              <input type="checkbox" id="musique" name="musique" />
              <label for="musique">musique</label>
            </div>
            <div>
                <input type="checkbox" id="cinéma" name="cinéma" />
                <label for="cinéma">cinéma</label>
            </div>
          </fieldset>
            <div>
                <button type="submit" name="ok"> S'inscrire</button>
        </div>
        <div class="connexion">
            <label for="connexion">Vous avez déja un compte ?</label>
            <a href="connexion.php" class="connexion-button">Se connecter</a><br>
        </div>
        <label for="sujet">Autre<br></label>
        <select name="sujet" id="sujet">
            <option value="" disabled selected hidden>Choisissez le sujet de votre requête</option>
            <option value="probleme-compte">Supprimer mon compte</option>
        </select>
        </form>
        </div>
        <div>
        </div>
        <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="script.js"></script> -->
</body>
</html>