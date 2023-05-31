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
if (!isset($_COOKIE["nbvisites"])) {
    setcookie("nbvisites", 0, time() + 86400); // Expire dans 24 heures
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["reset"])) {
    setcookie("nbvisites", 0, time() + 86400);
    $_COOKIE["nbvisites"] = 0; // Mettre à jour la valeur en mémoire
}

setcookie("nbvisites", $_COOKIE["nbvisites"] + 1, time() + 86400);

echo "Nombre de visites : " . $_COOKIE["nbvisites"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>

</body>
</html>