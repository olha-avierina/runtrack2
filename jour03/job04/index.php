<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Déclaration de la variable contenant le texte
$str = "Dans l'espace, personne ne vous entend crier";

// Compteur de caractères initialisé à 0
$compteur = 0;

// Parcours de chaque caractère dans la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    // Incrémentation du compteur
    $compteur++;
}

// Affichage du nombre de caractères
echo "Le nombre de caractères dans la chaîne est : " . $compteur;

?>
</body>
</html>