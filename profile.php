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



<!-- Metrre nom, prenom, pseudo, description, mot de passe, boutton modifier/sauvgarder -->




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
            <div class="about-user2039 mt-70">
                    <div class="user-title3930">
                        <h3>À propos de <a href=""
                                target="_blank"></a>

                            <!-- <span class="badge229">
                                <a>Admin</a></span>
                            <span class="badge001">
                                <a>Expert</a></span> -->
                        </h3>
                        <hr>
                    </div>
                    <div class="user-image293"> <img src="image/icones-user/verouiller_logo.jpg" alt="Image"> </div>
                    <div class="user-list10039">
                        <div class="ul-list-user-left29">
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> <strong>Pays :</strong> <input type="text"/></li>
                                <li><i class="fa fa-heart" aria-hidden="true"></i> <strong>Age:</strong> <input type="text"/></li>
                                <li><i class="fa fa-globe" aria-hidden="true"></i> <strong>Site Web: </strong> <input type="text"/></li>
                            </ul>
                        </div>
                        <div class="ul-list-user-right29">
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <strong>Téléphone:</strong> <input type="text"/></li>
                                <li><i class="fa fa-globe" aria-hidden="true"></i> <strong>Vile:</strong> <input type="text"/></li>
                                <li><i class="fa fa-user" aria-hidden="true"></i> <strong>Sexe: </strong> <input type="text"/></li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-description303">
                        <p>Description... </p>
                    </div>
                    <div class="user-social3903">
                        <p><i class="fa fa-facebook" aria-hidden="true"></i> Facebook : <input type="text" placeholder="Facebook" name="facebook" /></p>
                        <p><i class="fa fa-twitter" aria-hidden="true"></i> Twitter : <input type="text" placeholder="Twitter" name="twitter" /></p>
                        <p><i class="fa fa-linkedin" aria-hidden="true"></i> LinkedIn : <input type="text" placeholder="LinkedIn" name="linkedin" /></p>
                        <p><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest : <input type="text" placeholder="Pinterest" name="pinterest" /></p>
                        <p><i class="fa fa-instagram" aria-hidden="true"></i> Instagram : <input type="text" placeholder="Instagram" name="instagram" /></p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail : <input type="text" placeholder="Mail" name="Mail" /></p>
                    </div>
                </div>
            </div>

            <!-- end of col-md-9 -->

            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>