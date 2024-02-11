<?php
class UserModel
{
    private $bdd;
    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }
    public function inscription($nom, $prenom, $genre, $email, $date, $ville, $mdp)
    {
            $stmt = $this->bdd->prepare("INSERT INTO user (nom, prenom, genre, email, date, ville, mdp) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $genre, $email, $date, $ville, $mdp]);
    }
}