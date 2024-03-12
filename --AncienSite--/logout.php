<?php
session_start();

// Vérifier si l'utilisateur est connecté
if(isset($_SESSION['username'])) {
    // Détruire la session
    session_destroy();
    // Afficher un message de déconnexion réussie
    $message = "Déconnexion réussie.";
} else {
    // Afficher un message si l'utilisateur n'était pas connecté
    $message = "Vous n'étiez pas connecté.";
}
?>

<?php include 'php/header.php'; ?>
<title>Déconnexion</title>
<?php include 'php/navBar.php'; ?>


<body>
    <h1><?php echo $message; ?></h1>
    <p><a href="login.php">Retour à la page de connexion</a></p>
</body>
</html>
