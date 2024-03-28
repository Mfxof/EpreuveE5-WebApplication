<?php include 'php/token_session.php' ?>
<?php include 'php/header.php' ?>
<title>Questions</title>
<?php include 'php/navBar.php' ?>

<section class="header-descriptin329">
    <div class="container">
        <h3>Questions des utilisateurs</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Questions des utilisateurs</li>
        </ol>
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9 user-profile328903">
                <?php

                // Inclure la connexion à la base de données
                include 'php/db_connect.php';

                // Nombre d'articles par page
                $articles_par_page = 8;

                // Calculer la page actuelle
                $page = isset($_GET['page']) ? $_GET['page'] : 1;

                // Calculer l'offset
                $offset = ($page - 1) * $articles_par_page;

                // Requête pour récupérer les données des questions avec les informations de l'utilisateur
                $sql = "SELECT u.logo, u.tags, u.nom, u.prenom, u.pseudo, q.question FROM user_messages q
                        CROSS JOIN utilisateurs u ON q.utilisateur_id = u.id

                        ORDER BY q.created_at
                        LIMIT $articles_par_page OFFSET $offset";
                $result = mysqli_query($conn, $sql);

                // Vérifier s'il y a des données
                if (mysqli_num_rows($result) > 0) {
                    // Boucle à travers chaque ligne de résultat
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Afficher les questions
                        echo '<div class="about-user2039">';
                        // Afficher les informations de l'utilisateur
                        echo '<div class="row">';
                        echo '<div class="col-md-1">';
                        echo '<div class="user-image2939303"> <img src="image/icones-user/' . $row["logo"] . '.jpg" alt="UserLogo"> </div>';
                        echo '</div>';
                        echo '<div class="col-md-11">';
                        echo '<div class="user-description3903"> <a href="#">Ajouter ' . $row["nom"] . ' ' . $row["prenom"] . '</a>';
                        if ($row["tags"] == 1) {
                            echo '<span class="badge229"><a>Admin</a></span>';
                        } elseif ($row["tags"] == 2) {
                            echo '<span class="badge001"><a>Expert</a></span>';
                        } elseif ($row["tags"] == 3) {
                            echo '<span class="badge210"><a>Vérifer</a></span>';
                        } elseif ($row["tags"] == 4) {
                            echo '<span class="badge201"><a>Débutant</a></span>';
                        } elseif ($row["tags"] == 99) {
                            echo '<span class="badge099"><a>Explorateur</a></span> ';
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
                        echo '<p>' . $row["question"] . '</p>';
                        echo '</div>';
                        echo '<div class="user-social3903">';
                        echo '<p>Follow : <span>';
                        echo '<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
                        echo '<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
                        echo '<a href="https://www.linkedin.com/in/matys-freyermuth/"><i';
                        echo 'class="fa fa-linkedin" aria-hidden="true"></i></a>';
                        echo '<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>';
                        echo '<a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>';
                        echo '<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
                        echo '<a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>';
                        echo '</span> </p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "Aucun résultat trouvé";
                }

                // Afficher les liens de pagination
                $sql_total = "SELECT COUNT(*) AS total FROM user_messages";
                $result_total = mysqli_query($conn, $sql_total);
                $row_total = mysqli_fetch_assoc($result_total);
                $total_articles = $row_total['total'];
                $total_pages = ceil($total_articles / $articles_par_page);

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
                mysqli_close($conn);
                ?>

                <?php include 'php/sideContent.php';
                include 'php/footer.php';
                // Check if the user is logged in
                if (isset($_SESSION['email'])) {
                    // If logged in, display "Mon compte" with a link to profile.php
                    echo '<form action="send_user_question.php">
                <button type="submit" class="sticky-button"><i class="fas fa-plus"></i> Poser une question</button>
            </form>';
                } else {
                    // If not logged in, display "Connexion / Inscription" with a link to login.php
                    echo '';
                }
                ?>

            </div>
        </div>
    </div>
    <?php include 'php/sideContent.php';
    include 'php/footer.php';?>