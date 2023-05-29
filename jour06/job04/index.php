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
function calcule($nombre1, $operateur, $nombre2) {
  switch ($operateur) {
    case '+':
      return $nombre1 + $nombre2;
    case '-':
      return $nombre1 - $nombre2;
    case '*':
      return $nombre1 * $nombre2;
    case '/':
      if ($nombre2 != 0) {
        return $nombre1 / $nombre2;
      } else {
        return "Erreur : division par zéro";
      }
    case '%':
      return $nombre1 % $nombre2;
    default:
      return "Erreur : opérateur non valide";
  }
}

// Exampel: Appel de la fonction avec différents paramètres
$resultat = calcule(10, '+', 3);
echo "Résultat : " . $resultat . "<br>";

$resultat = calcule(10, '*', 5);
echo "Résultat : " . $resultat . "<br>";

$resultat = calcule(16, '/', 8);
echo "Résultat : " . $resultat . "<br>";
?>
</body>
</html>