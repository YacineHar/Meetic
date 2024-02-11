<?php
class UserController
{
    public function inscription()
    {
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

            $userModel = new UserModel($bdd);
            $userModel->inscription($nom, $prenom, $genre, $email, $date, $ville, $mdp);
        }  
        require_once('../views/inscription.php');
    }
}