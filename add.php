<?php

$nom = $_POST['nom'] ?? " ";
//var_dump($nom);
$classe = $_POST['classe'] ?? " ";
//var_dump($classe);
$civilisation = $_POST['civilisation'] ?? " ";
//var_dump($civilisation);
$puissance = $_POST['puissance'] ?? " ";
//var_dump($puissance);
$endurance = $_POST['endurance'] ?? " ";
//var_dump($endurance);
$orientation = $_POST['orientation'] ?? " ";
//var_dump($orientation);
$resistance = $_POST['resistance'] ?? " ";
//var_dump($resistance);

try {
    $requete = $connexion->prepare("INSERT INTO produits(nom, classe,civilisation,puissance,endurance,orientation,resistance) 
                                        VALUES(:nom, classe,civilisation,puissance,endurance,orientation,resistance)");

    $requete->bindParam(':nom', $nom);
    $requete->bindParam(':classe', $classe);
    $requete->bindParam(':civilisation', $civilisation);
    $requete->bindParam(':puissance', $puissance);
    $requete->bindParam(':endurance', $endurance);
    $requete->bindParam(':orientation', $orientation);
    $requete->bindParam(':resistance', $resistance);
$requete->execute();

    header('Location: index.php?page=add.php');
} catch (PDOException $e) {
    echo 'Erreur:' . $e->getMessage();
}
