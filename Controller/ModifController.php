<?php

$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'Yacine', '192002');

include '../model/ModifModel.php';

$ModifModel = new ModifModel($bdd);

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

    $modif = $ModifModel->updateUser($email, $new_email, $new_nom, $new_prenom, $new_date, $new_genre, $new_ville, $new_mdp);

    if ($modif)
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
