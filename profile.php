<?php
// Start the session and include necessary files
session_start();
include 'php/db_connect.php';
$email = $_SESSION['email'];

if (!isset ($_SESSION['email'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM utilisateurs WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Fermer la requête préparée
$stmt->close();

// Vérifier si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save_profile'])) {

    // Récupérer les données du formulaire
    $nouveau_pseudo = $_POST['pseudo'];
    $nouveau_nom = $_POST['nom'];
    $nouveau_prenom = $_POST['prenom'];
    $nouveau_email = $_POST['email'];
    $nouveau_num= $_POST['num'];

    // Ajoutez d'autres champs de formulaire pour les autres informations à modifier

    // Mettre à jour les informations de l'utilisateur dans la base de données
    $sql_update = "UPDATE utilisateurs SET pseudo = ?, nom = ?, prenom = ?, num = ? WHERE email = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("sssss", $nouveau_pseudo, $nouveau_nom, $nouveau_prenom,$nouveau_num, $email);
    $stmt_update->execute();

    // Rediriger l'utilisateur vers la page profile.php après la mise à jour
    header("Location: profile.php");
    exit;
}

// Fermer la connexion à la base de données
$conn->close();

// Logout functionality
if (isset ($_POST['logout'])) {
    // Destroy the session
    session_unset();
    session_destroy();
    // Redirect the user to the login page or another page
    header("Location: login.php");
    exit; // Always exit after redirection
}
?>

<!-- Metrre nom, prenom, pseudo, description, mot de passe, boutton modifier/sauvgarder -->




<?php include 'php/header.php' ?>
<title>Mon compte</title>
<?php include 'php/navBar.php' ?>


<section class="header-descriptin329">
    <div class="container">
        <h3>Mon compte</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Mon compte</li>
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
                        <?php
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Afficher les badges en fonction des tags de l'utilisateur
                                if ($row["tags"] == 1) {
                                    echo '<span class="badge229"><a>Admin</a></span>';
                                } elseif ($row["tags"] == 2) {
                                    echo '<span class="badge001"><a>Expert</a></span>';
                                } elseif ($row["tags"] == 3) {
                                    echo '<span class="badge210"><a>Vérifier</a></span>';
                                } elseif ($row["tags"] == 4) {
                                    echo '<span class="badge201"><a>Débutant</a></span>';
                                } elseif ($row["tags"] == 99) {
                                    echo '<span class="badge099"><a>Explorateur</a></span> ';
                                } elseif ($row["tags"] == 12) {
                                    echo '<span class="badge229"><a>Admin</a></span>';
                                    echo '<span class="badge001"><a>Expert</a></span>';
                                } elseif ($row["tags"] == 13) {
                                    echo '<span class="badge210"><a>Vérifier</a></span>';
                                    echo '<span class="badge001"><a>Expert</a></span>';
                                } elseif ($row["tags"] == 14) {
                                    echo '<span class="badge210"><a>Vérifier</a></span>';
                                    echo '<span class="badge201"><a>Débutant</a></span>';
                                }
            
                                // Fermer la balise h3
                                echo '</h3>';
                                echo '<hr>';
                                echo '</div>';
            
                                // Afficher l'image de profil
                                echo "<div class='user-image293'> <img src='image/icones-user/{$row["logo"]}.jpg' alt='Logo'> </div>";
            
                                // Afficher les informations de l'utilisateur dans un formulaire
                                echo "<form method='post'>";
                                echo "<div class='user-list10039'>";
                                echo "<div class='ul-list-user-left29'>";
                                echo "<ul>";
                                echo "<li><i class='fa fa-user' aria-hidden='true'></i> <strong>Pseudo: </strong> <input type='text' name='pseudo' value='{$row["pseudo"]}'></li>";
                                echo "<li><i class='fa fa-user' aria-hidden='true'></i> <strong>Nom: </strong> <input type='text' name='nom' value='{$row["nom"]}'></li>";
                                echo "<li><i class='fa fa-user' aria-hidden='true'></i> <strong>Prénom: </strong> <input type='text' name='prenom' value='{$row["prenom"]}'></li>";
                                echo "<li><i class='fa fa-envelope' aria-hidden='true'></i> <strong>Email: </strong><a href='mailto:" . $row["email"] . "'>" . $row["email"] . "</a></li>";
                                echo "<li><i class='fa fa-calendar' aria-hidden='true'></i> <strong>Créé le: </strong> {$row["created_at"]}</li>";
                                echo "<li><i class='fa fa-star' aria-hidden='true'></i> <strong>Points d'activité: </strong> {$row["points_activite"]}</li>";
                                echo "</div>";
            
                                echo "<div class='ul-list-user-right29'>";
                                echo "<ul>";
                                echo "<li><i class='fa fa-map-marker' aria-hidden='true'></i> <strong>Pays :</strong> <input type='text' name='pays'></li>";
                                echo "<li><i class='fa fa-heart' aria-hidden='true'></i> <strong>Age:</strong> <input type='number' name='age'></li>";
                                echo "<li><i class='fa fa-globe' aria-hidden='true'></i> <strong>Site Web: </strong><input type='text' name='site_web'></li>";
                                echo "<li><i class='fa fa-phone' aria-hidden='true'></i> <strong>Téléphone:</strong> <input type='tel' name='num' value='{$row["num"]}'></li>";
                                echo "<li><i class='fa fa-globe' aria-hidden='true'></i> <strong>Ville:</strong> <input type='text' name='ville'></li>";
                                echo "<li><i class='fa fa-user' aria-hidden='true'></i> <strong>Sexe: </strong> <input type='text' name='sexe'></li>";
                                echo "</ul>";
                                echo "</div>";
                                echo "</div>";
            
                                // Description de l'utilisateur
                                echo "<hr>";
                                echo "<ul>";
                                echo "<li><i class='fa fa-file-text' aria-hidden='true'></i> <strong>Description: </strong></li>";
                                echo "</ul>";
                                echo "<hr>";
            
                                // Réseaux sociaux
                                echo "<div class='user-social3903'>";
                                echo "<p><i class='fa fa-facebook' aria-hidden='true'></i> Facebook : <input type='text' placeholder='Facebook' name='facebook'></p>";
                                echo "<p><i class='fa fa-twitter' aria-hidden='true'></i> Twitter : <input type='text' placeholder='Twitter' name='twitter'></p>";
                                echo "<p><i class='fa fa-linkedin' aria-hidden='true'></i> LinkedIn : <input type='text' placeholder='LinkedIn' name='linkedin'></p>";
                                echo "<p><i class='fa fa-pinterest' aria-hidden='true'></i> Pinterest : <input type='text' placeholder='Pinterest' name='pinterest'></p>";
                                echo "<p><i class='fa fa-instagram' aria-hidden='true'></i> Instagram : <input type='text' placeholder='Instagram' name='instagram'></p>";
                                echo "<p><i class='fa fa-envelope-o' aria-hidden='true'></i> Mail : <input type='text' placeholder='Mail' name='mail'></p>";
                                echo "</div>";
            
                                // Bouton pour enregistrer les modifications
                                echo "<div class='button-container'>";
                                echo "<button type='submit' name='save_profile' class='save-button'>";
                                echo "<i class='fa fa-save'></i> Enregistrer";
                                echo "</button>";


                                if ($row['admin_id'] == 8) {
                                    echo "<form method='post' action='admin_panel.php'>";
                                    echo "<button type='submit' name='admin_panel' class='admin-panel-button'>";
                                    echo "<i class='fa fa-cogs'></i> Panneau d'administration";
                                    echo "</button>";
                                    echo "</form>";

                                }
            
                                // Bouton pour déconnecter l'utilisateur
                                echo "<form method='post'>";
                                echo "<button type='submit' name='logout' class='logout-button'>";
                                echo "<span class='icon'>&#x2716;</span> Déconnexion";
                                echo "</button>";


                                
                                echo "</form>";
            
                                echo "</div>";
                                echo "</form>";
                            }
                        } else {
                            echo "Aucun résultat trouvé.";
                        }



                        // Logout functionality
                        if (isset ($_POST['logout'])) {
                            // Destroy the session
                            session_unset();
                            session_destroy();
                            // Redirect the user to the login page or another page
                            header("Location: index.php");
                            exit; // Always exit after redirection
                        }
                        ?>




                    </div>
                    <!-- end of col-md-9 -->

                    <?php include 'php/sideContent.php' ?>
                    <?php include 'php/footer.php' ?>