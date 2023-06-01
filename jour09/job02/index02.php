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
// Informations de connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=jour08', "root");
$requete = $bdd->prepare("SELECT nom, capacite FROM salles");
$requete->execute();
$users = $requete->fetchAll();

echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>capacite</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach($users as $key => $user){
    echo '<tr>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['capacite'] . '</td>';
    echo '</tr>';

}

echo '</tbody>';
echo '</table>';
?>    
</body>
</html>