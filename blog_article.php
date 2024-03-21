<?php
include 'php/header.php';
include 'php/navBar.php';
include 'php/db_connect.php';

// Vérifier si l'ID de l'article est passé en paramètre GET
if (isset ($_GET['id'])) {
    // Récupérer l'ID de l'article depuis les paramètres GET
    $article_id = $_GET['id'];

    // Requête pour récupérer les détails de l'article à partir de la base de données
    $sql = "SELECT * FROM Blogs WHERE id = $article_id";
    $result = mysqli_query($conn, $sql);

    // Vérifier s'il y a des données
    if (mysqli_num_rows($result) > 0) {
        // Afficher les détails de l'article
        $row = mysqli_fetch_assoc($result);

        // Mettre à jour le nombre de vues dans la base de données
        $new_views = $row['nombre_vues'] + 1;
        $update_sql = "UPDATE Blogs SET nombre_vues = $new_views WHERE id = $article_id";
        mysqli_query($conn, $update_sql);

        ?>
        <section class="header-descriptin329">
            <div class="container">
                <h3>
                    <?php echo $row['titre']; ?>
                </h3>
                <ol class="breadcrumb breadcrumb839">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li class="active" id="sous_class">
                        <?php echo $row['titre']; ?>
                    </li>
                </ol>
            </div>
        </section>

        <section class="main-content920">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 blog--top-part2892">
                        <div class="blog-part3903">
                            <img src="<?php echo $row['image']; ?>" alt="Image" class="img-responsive">
                            <div class="blog-details3902">
                                <h3><span><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                    <?php echo $row['titre']; ?>
                                </h3>
                                <hr>
                                <div class="ques-icon-info2933">
                                    <a href="#"><i class="fa fa-user" aria-hidden="true">
                                            <?php echo $row['auteur']; ?>
                                        </i></a>
                                    <a><i class="fa fa-calendar" aria-hidden="true">
                                            <?php echo $row['date_publication']; ?>
                                        </i></a>
                                    <a href="#"><i class="fa fa-briefcase" aria-hidden="true">
                                            <?php echo $row['tags']; ?>
                                        </i></a>
                                    <a><i class="fa fa-comments-o" aria-hidden="true">
                                            <?php echo $row['nombre_commentaires']; ?> commentaires
                                        </i></a>
                                    <a><i class="fa fa-eye" aria-hidden="true">
                                            <?php echo $new_views; ?> vues
                                        </i></a>
                                </div>
                                <p>
                                    <?php echo $row['description']; ?>
                                </p>
                            </div>
                        </div>


                        <!-- Affichage des commentaires -->
                        <div class="comment-section">
                            <h4>Commentaires :</h4>
                            <?php
                            // Requête pour récupérer les commentaires de l'article avec les détails de l'utilisateur
                            $sql_comments = "SELECT c.contenu, u.nom, u.prenom 
                     FROM commentaires_blog c 
                     JOIN Utilisateurs u ON c.user_id = u.id 
                     WHERE c.blog_id = $article_id";
                            $result_comments = mysqli_query($conn, $sql_comments);

                            if (mysqli_num_rows($result_comments) > 0) {
                                while ($row_comment = mysqli_fetch_assoc($result_comments)) {
                                    echo '<div class="comment">';
                                    echo '<p><strong>' . $row_comment['nom'] . ' ' . $row_comment['prenom'] . '</strong>: ' . $row_comment['contenu'] . '</p>';
                                    echo '</div>';
                                }
                            } else {
                                echo "<p>Aucun commentaire pour le moment.</p>";
                            }
                            ?>
                        </div>

                    </div>

                    <?php
    } else {
        echo "Article non trouvé";
    }
} else {
    echo "ID de l'article non spécifié";
}

// Inclure le pied de page et fermer la connexion à la base de données
include 'php/sideContent.php';
include 'php/footer.php';
mysqli_close($conn);
?>