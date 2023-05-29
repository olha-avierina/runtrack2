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
function leetSpeak($str) {
  // Tableau de correspondance des caractères
  $leetChars = array(
    'A' => '4',
    'B' => '8',
    'E' => '3',
    'G' => '6',
    'L' => '1',
    'S' => '5',
    'T' => '7',
    'a' => '4',
    'b' => '8',
    'e' => '3',
    'g' => '6',
    'l' => '1',
    's' => '5',
    't' => '7'
  );

  // Convertir les caractères en leet speak
  $convertedStr = strtr($str, $leetChars);

  return $convertedStr;
}

// Exemple d'utilisation de la fonction
$string = "Bonjour laPlateforme";
$result = leetSpeak($string);
echo "Leet speak : " . $result;
?>
</body>
</html>