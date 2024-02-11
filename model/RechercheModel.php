<?php

class RechercheModel
{
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    public function searchUsers($genre, $ville)
    {
        $recherche = "SELECT * FROM user WHERE genre = :genre AND ville = :ville";
        $query = $this->bdd->prepare($recherche);
        $query->bindParam(':genre', $genre);
        $query->bindParam(':ville', $ville);
        if ($query->execute()) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}