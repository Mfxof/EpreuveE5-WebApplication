<?php
// Connexion à la base de données
$servername = "localhost"; // Adresse du serveur MySQL
$username = "root"; // Nom d'utilisateur MySQL
$password = "root"; // Mot de passe MySQL
$dbname = "projetwebappe5"; // Nom de la base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête pour récupérer les informations de l'utilisateur
$id = 1; // Remplacez 1 par l'ID de l'utilisateur dont vous souhaitez afficher le profil
$sql = "SELECT * FROM projetwebappe5 WHERE id = $id";
$result = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Boucler à travers les résultats et afficher les informations
    while($row = $result->fetch_assoc()) {
        echo "Pseudo: " . $row["pseudo"]. "<br>";
        echo "Nom: " . $row["nom"]. "<br>";
        echo "Prénom: " . $row["prenom"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Numéro de téléphone: " . $row["num"]. "<br>";
        echo "Numéro de téléphone: " . $row["mot_de_passe"]. "<br>";
        echo "Pays: " . $row["contry"]. "<br>";
        echo "Ville: " . $row["city"]. "<br>";
        echo "Âge: " . $row["age"]. "<br>";
        echo "Site web: " . $row["web"]. "<br>";
        echo "Créé le: " . $row["created_at"]. "<br>";
    }
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion
$conn->close();
?>






<?php include 'php/header.php' ?>
<title>Mon profile</title>
<?php include 'php/navBar.php' ?>


<section class="header-descriptin329">
    <div class="container">
        <h3>Mon profile</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Mon profile</li>
        </ol>
    </div>
</section>
<section class="google-map390">
    <div class="container">















        
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

            </div>

            <!-- end of col-md-9 -->

            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>