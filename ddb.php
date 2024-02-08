<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=mymeetic;','Yacine','192002');
}
catch (PDOException $e)
{
    echo '<br>'. $e->getMessage();
}