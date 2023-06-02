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
$requete = $bdd->prepare("SELECT salles.nom AS SN, etage.nom AS EN FROM salles JOIN etage ON salles.id_etage = etage.id_etage");
$requete->execute();
$users = $requete->fetchAll();
//récuprère tous les éléments de bdd
echo "<table border='1'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nom S</th>";
echo "<th>Nom E</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

//afishe meanings de bdd
foreach($users as $key => $user){
    echo '<tr>';
    echo '<td>' . $user['SN'] . '</td>';
    echo '<td>' . $user['EN'] . '</td>';

    echo '</tr>';

}

echo '</tbody>';
echo '</table>';
?>    
</body>
</html>
