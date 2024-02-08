<?php
include 'modelUser.php';
class controllerUser
{
    private $modelUser;

    public function __construct($modelUser)
    {
        $this->modelUser = $modelUser;
    }
    public function inscription($nom, $prenom, $date, $genre, $ville, $email, $mdp)
    {
        $this->modelUser->insertUser($nom, $prenom, $date, $genre, $ville, $email, $mdp);
    }
}
