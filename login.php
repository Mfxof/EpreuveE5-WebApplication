<?php
// Démarrer la session
session_start();

// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Vérifier si le formulaire de connexion est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifier les informations d'identification dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row && password_verify($mot_de_passe, $row['mot_de_passe'])) {
        $_SESSION['email'] = $email;
        header("Location: profile.php");
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

<?php include 'php/header.php' ?>
<title>Connexion</title>
<?php include 'php/navBar.php' ?>


<div class="forum">
    <h2>Connexion</h2>
    <div class="thread">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Email:</label>
            <input type="email" name="email"><br>
            <label>Mot de passe:</label>
            <input type="password" name="mot_de_passe"><br>
            <input type="submit" value="Se connecter">
        </form>
    </div>
</div>
</body>

</html>