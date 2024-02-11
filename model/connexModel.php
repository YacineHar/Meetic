<?php

class ConnexModel
{
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function getUserByEmail($email)
    {
        $query = $this->bdd->prepare("SELECT id, mdp FROM user WHERE email = ?");
        $query->execute([$email]);
        return $query->fetch();
    }
}