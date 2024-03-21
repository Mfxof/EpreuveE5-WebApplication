<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Vérifier si le formulaire d'inscription est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);

    // Insérer les données dans la base de données
    $sql = "INSERT INTO utilisateurs (pseudo, nom, prenom, email, num, mot_de_passe) VALUES ('$pseudo', '$nom','$prenom', '$email', '$num', '$mot_de_passe')";
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
            <label>Pseudo :</label>
            <input type="text" name="pseudo"><br>
            <label>*Nom :</label>
            <input type="text" name="nom" required><br>
            <label>*Prenom :</label>
            <input type="text" name="prenom" required><br>
            <label>*Email :</label>
            <input type="email" name="email" required><br>
            <label>Mobile :</label>
            <input type="num" name="num"><br>
            <label>*Mot de passe :</label>
            <input type="password" name="mot_de_passe" required><br>
            <input type="submit" value="S'inscrire">
        </form>
    </div>
</div>
</body>

</html>