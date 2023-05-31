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
// Vérifier si le formulaire de connexion a été soumis
if (isset($_POST['connexion'])) {
    // Récupérer le prénom du formulaire
    $prenom = $_POST['prenom'];

    // Définir le cookie avec une expiration d'une heure
    setcookie('prenom', $prenom, time() + 3600);

    // Rediriger vers la page d'accueil
    header('Location: index.php');
    exit();
}

// Vérifier si l'utilisateur est déjà connecté via le cookie
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];

    // Afficher un message de bienvenue et le bouton de déconnexion
    echo "Bonjour $prenom !";
    echo '<br>';
    echo '<form method="post">';
    echo '<input type="submit" name="deco" value="Déconnexion">';
    echo '</form>';

    // Vérifier si l'utilisateur a cliqué sur le bouton de déconnexion
    if (isset($_POST['deco'])) {
        // Supprimer le cookie en le mettant à une date passée
        setcookie('prenom', '', time() - 3600);

        // Rediriger vers la page d'accueil
        header('Location: index.php');
        exit();
    }
} else {
    // Afficher le formulaire de connexion
    echo '<form method="post">';
    echo '<input type="text" name="prenom" placeholder="Entrez votre prénom" required>';
    echo '<input type="submit" name="connexion" value="Connexion">';
    echo '</form>';
}
?>
</body>
</html>