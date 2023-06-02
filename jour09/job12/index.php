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
$bdd = new PDO('mysql:host=localhost;dbname=jour08', 'root', 'root');
$requete = $bdd->prepare("SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'");
$requete->execute();
$users = $requete->fetchAll();
//récuprère tous les éléments de bdd
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Prénom</th>";
echo "<th>Nom</th>";
echo "<th>Naissance</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

//afishe meanings de bdd
foreach($users as $key => $user){
    echo '<tr>';
    echo '<td>' . $user['prenom'] . '</td>';
    echo '<td>' . $user['nom'] . '</td>';
    echo '<td>' . $user['naissance'] . '</td>';

    echo '</tr>';

}

echo '</tbody>';
echo '</table>';
?>    
</body>
</html>