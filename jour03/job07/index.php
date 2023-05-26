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
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Convertir la chaîne en un tableau de caractères
$chars = str_split($str);

// Stocker le premier caractère
$firstChar = $chars[0];

// Parcourir le tableau de caractères
for ($i = 0; $i < count($chars) - 1; $i++) {
  $chars[$i] = $chars[$i + 1];
}

// Remplacer le dernier caractère par le premier
$chars[count($chars) - 1] = $firstChar;

// Rejoindre les caractères pour former une nouvelle chaîne
$newStr = implode('', $chars);

echo $newStr;
?>
</body>
</html>