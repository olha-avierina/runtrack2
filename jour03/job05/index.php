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

// Chaîne de texte
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Dictionnaire des consonnes et des voyelles
$dic = array(
    "consonnes" => 0,
    "voyelles" => 0
);

// Parcours de chaque caractère dans la chaîne
for ($i = 0; $i < strlen($str); $i++) {
    $caractere = strtolower($str[$i]);

    // Vérifie si le caractère est une lettre
    if (ctype_alpha($caractere)) {
        // Vérifie si le caractère est une voyelle
        if (in_array($caractere, array("a", "e", "i", "o", "u", "y"))) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}

// Affichage du tableau HTML
echo "<table>";
echo "<thead><tr><th>Voyelles</th><th>Consonnes</th></tr></thead>";
echo "<tbody><tr><td>" . $dic["voyelles"] . "</td><td>" . $dic["consonnes"] . "</td></tr></tbody>";
echo "</table>";

?>
 
</body>
</html>