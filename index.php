<?php
include 'modelUser.php';
include 'controllerUser.php';

$modelUser = new modelUser($bdd);
$controllerUser = new controllerUser($modelUser);

if (isset($_GET['action']))
{
    if ($_GET['action'] === 'inscription')
    {
        $controllerUser->inscription($_POST['nom'], $_POST['prenom'], $_POST['date'], $_POST['genre'], $_POST['ville'], $_POST['email'], $_POST['mdp']);
    }
}

include 'inscription.html';