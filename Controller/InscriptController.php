<?php
$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'Yacine', '192002');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $genre = $_POST['genre'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $ville = $_POST['ville'];
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    $bdduser = $bdd->prepare("INSERT INTO user (nom, prenom, genre, email, date, ville, mdp) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $bdduser->execute([$nom, $prenom, $genre, $email, $date, $ville, $mdp]);
    
    header("Location: Validation_Inscript.html");
    exit();
}