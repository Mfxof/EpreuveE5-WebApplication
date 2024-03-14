<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

// Récupérer les informations de compte depuis la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

$email = $_SESSION['email'];
$sql = "SELECT * FROM utilisateurs WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Assurez-vous que l'utilisateur existe
if (!$row) {
    die("L'utilisateur n'existe pas.");
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

<?php include 'php/header.php'; ?>
<title>Mon compte</title>
<?php include 'php/navBar.php'; ?>

<div class="forum">
    <h2>Profil de
        <?php echo $row['nom']; ?>
    </h2>
    <div class="thread">


        <div class="profile-container">

            <img src="chemin_vers_image_de_profil.jpg" alt="Image de profil" class="profile-picture">
            <p><strong>Nom:</strong>
                <?php echo $row['nom']; ?>
            </p>
            <p><strong>Email:</strong>
                <?php echo $row['email']; ?>
            </p>
            <!-- Ajoutez d'autres informations de profil ici, telles que prénom, etc. -->
        </div>
    </div>

<form action="logout.php" method="post">
    <input type="submit" value="Déconnexion">
</form>

<?php include 'php/footer.php' ?>
    </div>
</body>

</html>
