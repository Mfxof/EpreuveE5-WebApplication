<?php include 'php/header.php' ?>
<title>Blog</title>
<?php include 'php/navBar.php' ?>

<!--===breadcrumb=====-->
<section class="header-descriptin329">
    <div class="container">
        <h3>Blog</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Blog</li>
        </ol>
    </div>
</section>
<!--====contenu du corps ===-->
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9 blog--top-part2892">
                <?php

                // Inclure la connexion à la base de données
                include 'php/db_connect.php';

                // Nombre d'articles par page
                $articles_par_page = 3;

                // Calculer la page actuelle
                $page = isset ($_GET['page']) ? $_GET['page'] : 1;

                // Calculer l'offset
                $offset = ($page - 1) * $articles_par_page;

                // Requête pour récupérer les données des blogs depuis la base de données avec pagination
                $sql = "SELECT * FROM Blogs LIMIT $articles_par_page OFFSET $offset";
                $result = mysqli_query($conn, $sql);

                // Vérifier s'il y a des données
                if (mysqli_num_rows($result) > 0) {
                    // Boucle à travers chaque ligne de résultat
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Afficher les données du blog
                        echo '<div class="blog-part3903">';
                        // Afficher le contenu du blog
                        echo '<img src="' . $row["image"] . '" alt="Image" class="img-responsive">';
                        echo '<div class="blog-details3902">';
                        echo '<h3><span><i class="fa fa-picture-o" aria-hidden="true"></i></span> ' . $row["titre"] . '</h3>';
                        echo '<hr>';
                        echo '<div class="ques-icon-info2933">';
                        echo '<a href="#"><i class="fa fa-user" aria-hidden="true"> ' . $row["auteur"] . '</i></a>';
                        echo '<a href="#"><i class="fa fa-calendar" aria-hidden="true"> ' . $row["date_publication"] . '</i></a>';
                        echo '<a href="#"><i class="fa fa-briefcase" aria-hidden="true"> ' . $row["tags"] . '</i></a>';
                        echo '<a href="#"><i class="fa fa-comments-o" aria-hidden="true"> ' . $row["nombre_commentaires"] . ' commentaires</i></a>';
                        echo '<a href="#"><i class="fa fa-eye" aria-hidden="true"> ' . $row["nombre_vues"] . ' vues</i></a>';
                        echo '</div>';
                        echo '<p>' . $row["description"] . '</p>';
                        echo '<div class="continue-deatils738">';
                        echo '<a href="blog_article.php?id=' . $row["id"] . '"><i class="fa fa-plus" aria-hidden="true"> Continuer à lire</i></a>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';

                    }
                } else {
                    echo "Aucun résultat trouvé";
                }

                // Afficher les liens de pagination
                $sql_total = "SELECT COUNT(*) AS total FROM Blogs";
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


            </div>
            <!--                fin de col-md-9 -->
            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>