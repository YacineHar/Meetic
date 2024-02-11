<?php

class ModifModel
{
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function updateUser($email, $new_email, $new_nom, $new_prenom, $new_date, $new_genre, $new_ville, $new_mdp)
    {
        $hashmdp = password_hash($new_mdp, PASSWORD_DEFAULT);
        $modifications = "UPDATE user SET email = :new_email, nom = :nom, prenom = :prenom, date = :date, genre = :genre, ville = :ville, mdp = :mdp WHERE email = :email";
        $query = $this->bdd->prepare($modifications);
        $query->bindParam(':new_email', $new_email);
        $query->bindParam(':nom', $new_nom);
        $query->bindParam(':prenom', $new_prenom);
        $query->bindParam(':date', $new_date);
        $query->bindParam(':genre', $new_genre);
        $query->bindParam(':ville', $new_ville);
        $query->bindParam(':mdp', $hashmdp);
        $query->bindParam(':email', $email);
        return $query->execute();
    }
}
