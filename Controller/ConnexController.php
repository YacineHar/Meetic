<?php

$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'Yacine', '192002');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $bdduser = $bdd->prepare("SELECT id, mdp FROM user WHERE email = ?");
    $bdduser->execute([$email]);
    $user = $bdduser->fetch();

    if ($user && password_verify($mdp, $user['mdp']))
    {
        session_start();
        $_USER['user_id'] = $user['id'];
        header("Location: validation_connex.html");
        exit();
    }
    else
    {
        header("Location: échec_connex.html");
    }
}