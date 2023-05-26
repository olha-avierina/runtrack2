<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html>
<head>
    <title>Formulaire avec changement de style</title>
    <link id="style-link" rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <h1>Formulaire avec changement de style</h1>
    <form id="style-form" action="#" method="post">
        <label for="style">Sélectionnez un style :</label>
        <select id="style" name="style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        </select>
        <br><br>
        <input type="submit" value="Valider">
    </form>

    <script>
        document.getElementById('style-form').addEventListener('submit', function(e) {
            e.preventDefault(); // Empêcher le rechargement de la page

            var styleSelect = document.getElementById('style');
            var selectedStyle = styleSelect.value;

            var styleLink = document.getElementById('style-link');
            styleLink.href = selectedStyle + '.css';
        });
    </script>
</body>
</html>
</body>
</html>