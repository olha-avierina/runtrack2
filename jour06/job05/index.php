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
function occurrences($str, $char) {
  $count = 0;
  $length = strlen($str);

  for ($i = 0; $i < $length; $i++) {
    if ($str[$i] === $char) {
      $count++;
    }
  }

  return $count;
}

// Exemple d'utilisation de la fonction
$string = "Bonjour laPlateforme";
$character = "o";
$result = occurrences($string, $character);
echo "Le nombre d'occurrences de '" . $character . "' dans '" . $string . "' est : " . $result;
?>
</body>
</html>