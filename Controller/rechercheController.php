<?php
$bdd = new PDO('mysql:host=localhost;dbname=user;charset=utf8', 'Yacine', '192002');

include '../model/RechercheModel.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $genre = $_POST['genre'];
    $ville = $_POST['ville'];

    $rechercheModel = new RechercheModel($bdd);

    $values = $rechercheModel->searchUsers($genre, $ville);

    if ($values !== false)
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Recherche de compte</title>
                <link href="../views/style.css" rel="stylesheet">
            </head>
            <body>
            <div class="inscription">
                <div class="top">
                    <h1>Recherche de compte</h1>
                    <img src="../views/meetic.jpg" alt="Logo meetic" />
                </div><br>
                <table>
                    <thead>
                        <tr>
                            <th>Nom :</th>
                            <th>Prénom :</th>
                            <th>Genre :</th>
                            <th>Ville :</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($values as $value): ?>
                        <tr>
                            <td><?php echo $value['nom'] ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $value['prenom']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $value['genre']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td><?php echo $value['ville']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="../views/Recherche.html" class="connexion-button">Rechercher</a><br>
            </div>
        </body>
        </html>
        <?php
    }
    else
    {
        header("Location: ../views/Validation_modif.html");
        exit();
    }
}