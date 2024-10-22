<?php include 'php/header.php' ?>
<title>Thread</title>
<?php include 'php/navBar.php' ?>


<!--    breadcumb of category -->
<section class="header-descriptin329">
    <div class="container">
        <h3>Thread</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Thread</li>
        </ol>
    </div>
</section>
<!--    body content-->
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="main">
                    <input id="tab1" type="radio" name="tabs" checked>
                    <label for="tab1">Question récente</label>
                    <input id="tab2" type="radio" name="tabs">
                    <label for="tab2">WEB</label>
                    <input id="tab3" type="radio" name="tabs">
                    <label for="tab3">Jobs</label>
                    <input id="tab4" type="radio" name="tabs">
                    <label for="tab4">JeuxVidéo</label>
                    <input id="tab5" type="radio" name="tabs">
                    <label for="tab5">Résolu</label>
                    <input id="tab6" type="radio" name="tabs">
                    <label for="tab6">En attente</label>
                    <hr>
                    <?php

                    // Inclure la connexion à la base de données
                    include 'php/db_connect.php';

                    // Nombre d'articles par page
                    $articles_par_page = 5;

                    // Calculer la page actuelle
                    $page = isset ($_GET['page']) ? $_GET['page'] : 1;

                    // Calculer l'offset
                    $offset = ($page - 1) * $articles_par_page;

                    // Requête pour récupérer les données des blogs depuis la base de données avec pagination
                    $sql = "SELECT * FROM posts LIMIT $articles_par_page OFFSET $offset";
                    $result = mysqli_query($conn, $sql);

                    // Vérifier s'il y a des données
                    if (mysqli_num_rows($result) > 0) {
                        // Boucle à travers chaque ligne de résultat
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="question-type2033">';
                            echo '<div class="row">';
                            echo '<div class="col-md-1">';
                            echo '<div class="left-user12923 left-user12923-repeat">';
                            echo "<a href='#'><img src='image/icones-user/{$row["logo"]}.jpg' alt='Image'></a>";
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-md-9">';
                            echo '<div class="right-description893">';
                            echo '<div id="que-hedder2983">';
                            echo '<h3><a href="temp-post-deatils.php" target="_blank">' . $row["titre"] . '</a></h3>';
                            echo '</div>';
                            echo '<div class="ques-details10018">';
                            echo '<p>' . $row["contenu"] . '</p>';
                            echo '</div>';
                            echo '<hr>';
                            echo '<div class="ques-icon-info3293">';
                            if ($row["resolu"] == 1) {
                                echo '<a><i class="fa fa-check" aria-hidden="true"> Résolu</i></a> ';
                            } elseif ($row["resolu"] == 2) {
                                echo '<a><i class="fa fa-check check-color329" aria-hidden="true"> Résolu</i></a> ';
                            } else {
                                echo ' ';
                            }
                            echo '<a><i class="fa fa-star" aria-hidden="true">' . $row["note"] . '</i></a>';
                            echo '<a href="#' . $row["tags"] . '"><i class="fa fa-folder" aria-hidden="true">' . $row["tags"] . '</i></a>';
                            echo '<a><i class="fa fa-clock-o" aria-hidden="true">' . $row["date"] . '</i></a>';
                            echo '<a><i class="fa fa-bug" aria-hidden="true"> Signaler</i></a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-md-2">';
                            echo '<div class="ques-type302">';
                            echo '<a><button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true"> ' . $row["nbReponses"] . ' réponses</i></button></a>';
                            echo '<a><button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> ' . $row["nbVues"] . ' vues</i></button></a>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "Aucun résultat trouvé";
                    }

                    // Afficher les liens de pagination
                    $sql_total = "SELECT COUNT(*) AS total FROM posts";
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
            </div>
            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>
            <form action="send_thread.php">
                <button type="submit" class="sticky-button"><i class="fas fa-plus"></i> Poster un thread</button>
            </form>