<?php

$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'Yacine', '192002');

include '../model/connexModel.php';

$ConnexModel = new ConnexModel($bdd);

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $user = $ConnexModel->getUserByEmail($email);

    if ($user && password_verify($mdp, $user['mdp']))
    {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: validation_connex.html");
        exit();
    }
    else
    {
        header("Location: échec_connex.html");
        exit();
    }
}