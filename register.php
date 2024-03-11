<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "admin", "XXXXX", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Vérifier si le formulaire d'inscription est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    // Insérer les données dans la base de données
    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe) VALUES ('$nom','$prenom', '$email', '$mot_de_passe')";
    if (mysqli_query($conn, $sql)) {
        header("Location: profile.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
<?php include 'php/header.php' ?>
<title>Inscription</title>
<?php include 'php/navBar.php' ?>

<div class="forum">
    <h2>Inscription</h2>
    <div class="thread">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Nom :</label>
            <input type="text" name="nom"><br>
            <label>Prenom :</label>
            <input type="text" name="prenom"><br>
            <label>Email :</label>
            <input type="email" name="email"><br>
            <label>Mot de passe :</label>
            <input type="password" name="mot_de_passe"><br>
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</div>
</body>

</html>