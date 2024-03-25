<?php
include 'php/token_session.php';
include 'php/db_connect.php';
include 'php/header.php'; ?>
<title>Utilisateurs</title>
<?php include 'php/navBar.php' ?>


<!-- ======breadcrumb ======-->
<section class="header-descriptin329">
    <div class="container">
        <h3>Détails utilisateurs</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Détails utilisateurs</li>
        </ol>
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <!--    body content-->
            <div class="col-md-9">


                <?php
                // Nombre d'articles par page
                $articles_par_page = 5;

                // Calculer la page actuelle
                $page = isset ($_GET['page']) ? $_GET['page'] : 1;

                // Calculer l'offset
                $offset = ($page - 1) * $articles_par_page;

                // Requête pour récupérer les données des blogs depuis la base de données avec pagination
                $sql = "SELECT * FROM utilisateurs ORDER BY points_activite DESC LIMIT $articles_par_page OFFSET $offset";
                $resultat = mysqli_query($conn, $sql);












                // Vérifier s'il y a des données
                if (mysqli_num_rows($resultat) > 0) {
                    if ($resultat->num_rows > 0) {
                        // Afficher les données de chaque utilisateur
                        while ($row = $resultat->fetch_assoc()) {
                            echo "<div class='about-user2039 mt-70'>";
                            echo "<div class='user-title3930'>";
                            echo "<h3>À propos de <a href='" . $row['site_web'] . "' target='_blank'>" . $row['nom'] . " " . $row['prenom'] . "</a>";

                            if ($row["tags"] == 1) {
                                echo '<span class="badge229"><a>Admin</a></span>';
                            } elseif ($row["tags"] == 2) {
                                echo '<span class="badge001"><a>Expert</a></span>';
                            } elseif ($row["tags"] == 3) {
                                echo '<span class="badge210"><a>Vérifer</a></span>';
                            } elseif ($row["tags"] == 4) {
                                echo '<span class="badge201"><a>Débutant</a></span>';
                            } elseif ($row["tags"] == 12) {
                                echo '<span class="badge229"><a>Admin</a></span>';
                                echo '<span class="badge001"><a>Expert</a></span>';
                            } elseif ($row["tags"] == 13) {
                                echo '<span class="badge210"><a>Vérifer</a></span>';
                                echo '<span class="badge001"><a>Expert</a></span>';
                            } elseif ($row["tags"] == 14) {
                                echo '<span class="badge210"><a>Vérifer</a></span>';
                                echo '<span class="badge201"><a>Débutant</a></span>';
                            } else {
                                echo ' ';
                            }
                            echo "</h3>";
                            echo "<hr>";
                            echo "</div>";

                            // Sortie HTML
                            echo "<div class='user-image293'><img src='image/icones-user/" . $row['logo'] . ".jpg' alt='UserLogo'></div>";
                            echo "<div class='user-list10039'>";
                            echo "<div class='ul-list-user-left29'>";
                            echo "<ul>";
                            echo "<li><i class='fa fa-plus' aria-hidden='true'></i> <strong>Inscription:</strong> " . $row['created_at'] . "</li>";
                            echo "<li><i class='fa fa-map-marker' aria-hidden='true'></i> <strong>Pays:</strong> " . $row['pays'] . "</li>";
                            echo "<li><i class='fa fa-heart' aria-hidden='true'></i> <strong>Age:</strong> " . $row['age'] . "</li>";
                            echo "<li><i class='fa fa-globe' aria-hidden='true'></i> <strong>Site Web:</strong> <a href='" . $row['site_web'] . "' target='_blank'>Ouvrir</a></li>";
                            echo "</ul>";
                            echo "</div>";
                            echo "<div class='ul-list-user-right29'>";
                            echo "<ul>";
                            echo "<li><i class='fa fa-plus' aria-hidden='true'></i> <strong>Points:</strong> " . $row['points_activite'] . "</li>";
                            echo "<li><i class='fa fa-globe' aria-hidden='true'></i> <strong>Ville:</strong> " . $row['ville'] . "</li>";
                            echo "<li><i class='fa fa-user' aria-hidden='true'></i> <strong>Sexe:</strong> " . $row['sexe'] . "</li>";
                            echo "</ul>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='user-description303'>";
                            echo "<p>" . $row['description'] . "</p>";
                            echo "</p> <a href='#'>Ajouter " . $row['nom'] . " " . $row['prenom'] . "</a>";
                            echo "</div>";
                            echo "<div class='user-social3903'>";
                            echo "Voir plus : ";
                            echo "<a href='#' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i></a>";
                            echo "<a href='#' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a>";
                            echo "<a href='#' target='_blank'><i class='fa fa-linkedin' aria-hidden='true'></i></a>";
                            echo "<a href='#' target='_blank'><i class='fa fa-pinterest-p' aria-hidden='true'></i></a>";
                            echo "<a href='#' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i></a>";
                            echo "<a href='#' target='_blank'><i class='fa fa-envelope-o' aria-hidden='true'></i></a>";
                            // Ajoutez ici les icônes de réseaux sociaux si disponibles dans la base de données
                            echo "</div>";
                            echo "</div>";

                        }
                    }
                } else {
                    echo "Aucun résultat trouvé";
                }









                // Afficher les liens de pagination
                $sql_total = "SELECT COUNT(*) AS total FROM utilisateurs";
                $result_total = mysqli_query($conn, $sql_total);
                $row_total = mysqli_fetch_assoc($result_total);
                $total_utilisateurs = $row_total['total'];
                $total_pages = ceil($total_utilisateurs / $articles_par_page);

                echo '<nav aria-label="Page navigation">';
                echo '<ul class="pagination">';
                // Bouton précédent
                if ($page > 1) {
                    echo '<li><a href="?page=' . ($page - 1) . '" aria-label="Précédent"><span aria-hidden="true">&laquo;</span></a></li>';
                }
                // Afficher les numéros de page
                for ($i = 1; $i <= $total_pages; $i++) {
                    echo '<li><a href="?page=' . $i . '">' . $i . '</a></li>';
                }
                // Bouton suivant
                if ($page < $total_pages) {
                    echo '<li><a href="?page=' . ($page + 1) . '" aria-label="Suivant"><span aria-hidden="true">&raquo;</span></a></li>';
                }
                echo '</ul>';
                echo '</nav>';





                // Fermer la connexion à la base de données
                $conn->close();
                ?>

            </div>

            <!-- end of col-md-9 -->
            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>