<?php
$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'Yacine', '192002');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $new_email = $_POST['new_email'];
    $new_nom = $_POST['nom'];
    $new_prenom = $_POST['prenom'];
    $new_date = $_POST['date'];
    $new_genre = $_POST['genre'];
    $new_ville = $_POST['ville'];
    $new_mdp = $_POST['confirm'];

    $modifications = "UPDATE user SET email = :new_email, nom = :nom, prenom = :prenom, date = :date, genre = :genre, ville = :ville, mdp = :mdp WHERE email = :email";
    $bdduser = $bdd->prepare($modifications);
    $bdduser->bindParam(':new_email', $new_email);
    $bdduser->bindParam(':nom', $new_nom);
    $bdduser->bindParam(':prenom', $new_prenom);
    $bdduser->bindParam(':date', $new_date);
    $bdduser->bindParam(':genre', $new_genre);
    $bdduser->bindParam(':ville', $new_ville);
    $bdduser->bindParam(':mdp', $new_mdp);
    $bdduser->bindParam(':email', $email);

    if ($bdduser->execute())
    {
        header("Location: ../views/Validation_modif.html");
        exit();
    }
    else
    {
        header("Location: ../views/échec_modif.html");
        exit();
    }
}