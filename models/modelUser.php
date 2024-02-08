<?php
class modelUser
{
    private $bdd;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }
    public function insertUser($nom, $prenom, $date, $genre, $ville, $email, $mdp)
    {
        $link = $this->bdd->prepare('INSERT INTO user (nom, prenom, date, genre, ville, email, mdp) VALUES (:nom, :prenom, :date, :genre, :ville, :email, MD5(:mdp))');

        $link->execute(array
        (
            "nom" => $nom,
            "prenom" => $prenom,
            "date" => $date,
            "genre" => $genre,
            "ville" => $ville,
            "email" => $email,
            "mdp" => $mdp
        ));
    }
}