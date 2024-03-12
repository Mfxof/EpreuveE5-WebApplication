    <?php include 'php/header.php'; ?>
    <title>Création d'un thread</title>
    <?php include 'php/navBar.php'; ?>


<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Initialiser la variable de message
$message = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $utilisateur = $_POST['utilisateur'];

    // Préparer et exécuter la requête SQL d'insertion avec des prepared statements
    $insert_query = "INSERT INTO posts (titre, contenu, utilisateur, likes) VALUES (?, ?, ?, 0)";
    $stmt = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($stmt, "sss", $titre, $contenu, $utilisateur);

    if (mysqli_stmt_execute($stmt)) {
        $message = "Nouveau fil de discussion créé avec succès.";
    } else {
        $message = "Erreur lors de la création du fil de discussion: " . mysqli_error($conn);
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

<h1>Créer un nouveau fil de discussion</h1>
<?php if (!empty($message)): ?>
    <p>
        <?php echo htmlspecialchars($message); ?>
    </p>
<?php endif; ?>
<div class="forum">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <label for="titre">*Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br>
        <label for="contenu">*Contenu :</label><br>
        <textarea id="contenu" name="contenu" required></textarea><br>
        <label for="utilisateur">*Utilisateur :</label><br>
        <input type="text" id="utilisateur" name="utilisateur" required><br><br>
        <label for="fichier">Ajouter un fichier :</label><br>
        <input type="file" id="fichier" name="fichier"><br><br>
        <input type="submit" value="Envoyer">
    </form>
</div>

</body>

</html>
