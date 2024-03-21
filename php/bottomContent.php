<!--           strart col-md-3 (side bar)-->
<section>
    <div class="status-part3821" style="width : 350px">
        <h4>Statistiques</h4>

        <?php
        // Inclure la connexion à la base de données
        include 'php/db_connect.php';

        // Requête pour compter le nombre total d'entrées dans la base de données
        $sqlCountEntries = "SELECT COUNT(*) AS totalEntries FROM posts";
        $resultCountEntries = $conn->query($sqlCountEntries);
        $rowCountEntries = $resultCountEntries->fetch_assoc();
        $totalEntries = $rowCountEntries['totalEntries'];

        // Requête pour compter le nombre total de questions dans la base de données
        $sqlCountEntriesQuestion = "SELECT COUNT(*) AS totalEntries FROM user_questions";
        $resultCountEntriesQuestion = $conn->query($sqlCountEntriesQuestion);
        $rowCountEntriesQuestion = $resultCountEntriesQuestion->fetch_assoc();
        $totalEntriesQuestion = $rowCountEntriesQuestion['totalEntries'];


        // Initialiser le total des réponses
        $totalReponses = 0;

        // Requête pour récupérer le nombre de réponses pour chaque question et les additionner
        $sqlGetReponses = "SELECT nbReponses FROM posts WHERE tags NOT LIKE '%question%'";
        $resultGetReponses = $conn->query($sqlGetReponses);
        while ($row = $resultGetReponses->fetch_assoc()) {
            $totalReponses += $row['nbReponses'];
        }

        $totalVues = 0;

        // Requête pour récupérer le nombre de vues pour chaque question et les additionner
        $sqlGetVues = "SELECT nbVues FROM posts WHERE tags NOT LIKE '%question%'";
        $stmtGetVues = $conn->query($sqlGetVues);
        while ($row = $stmtGetVues->fetch_assoc()) {
            $totalVues += $row['nbVues'];
        }


        $totalVues_blog = 0;

        // Requête pour récupérer le nombre de vues pour chaque question et les additionner
        $sqlGetVues = "SELECT nombre_vues FROM blogs WHERE tags NOT LIKE '%question%'";
        $stmtGetVues = $conn->query($sqlGetVues);
        while ($row = $stmtGetVues->fetch_assoc()) {
            $totalVues_blog += $row['nombre_vues'];
        }


        echo '<p class="inline"><i class="fa fa-comment" aria-hidden="true" style="width : 320px"> Fil de Discussion (' . $totalEntries . ')</i></p>';
        echo '<p class="inline"><i class="fa fa-comment" aria-hidden="true" style="width : 320px"> Réponses (' . $totalReponses . ')</i></p>';
        echo '<p class="inline"><i class="fa fa-question-circle" aria-hidden="true" style="width : 320px"> Vues des thread (' . $totalVues . ')</i></p>';
        echo '<p class="inline"><i class="fa fa-question-circle" aria-hidden="true" style="width : 320px"> Questions (' . $totalEntriesQuestion . ')</i></p>';

        echo '<p class="inline"><i class="fa fa-question-circle" aria-hidden="true" style="width : 320px"> Vues des blogs (' . $totalVues_blog . ')</i></p>';


        // Fermeture de la connexion
        $conn->close();

        ?>

    </div>
    <div class="categori-part329" style="width : 350px">
        <h4>Categories</h4>
        <ul>
            <li><a href="post.php#developpeur_web">Développeur web</a></li>
            <li><a href="post.php#developpeur_Android">Développeur Android</a></li>
            <li><a href="post.php#developpeur_graphique">Développeur graphique</a></li>
            <li><a href="post.php#developpeur_web">Développeur web</a></li>


        </ul>
    </div>

    <div class="highest-part302" style="width : 350px">
        <h4>Les points les plus élevés</h4>
        <?php
        include 'php/db_connect.php';


        $sql = "SELECT logo, nom, prenom, tags, points_activite FROM utilisateurs ORDER BY points_activite DESC LIMIT 5";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Afficher les données de chaque utilisateur dans la structure HTML
            while ($row = $result->fetch_assoc()) {
                echo "<div class='pints-wrapper'>";
                echo "<div class='left-user3898'>";
                echo "<a href='#'><img src='image/icones-user/{$row["logo"]}.jpg' alt='Image'></a>";
                echo "<div class='imag-overlay39'>";
                echo "<a href='#'><i class='fa fa-plus' aria-hidden='true'></i></a>";
                echo "</div>";
                echo "</div>";
                echo "<span class='points-details938'>";
                echo "<a href='#'><h5>{$row["nom"]} {$row["prenom"]}</h5></a>";
                // Vous pouvez ajouter des conditions pour les designations
                if ($row["tags"] == 1) {
                    echo '<a href="#" class="designetion001">Admin</a> ';
                } elseif ($row["tags"] == 2) {
                    echo '<a href="#" class="designetion229">Expert</a> ';
                } elseif ($row["tags"] == 3) {
                    echo '<a href="#" class="designetion210">Vérifer</a> ';
                } elseif ($row["tags"] == 4) {
                    echo '<a href="#" class="designetion201">Débutant</a> ';
                } elseif ($row["tags"] == 12) {
                    echo '<a href="#" class="designetion001">Admin</a> ';
                    echo '<a href="#" class="designetion229">Expert</a> ';
                } elseif ($row["tags"] == 13) {
                    echo '<a href="#" class="designetion210">Vérifer</a> ';
                    echo '<a href="#" class="designetion229">Expert</a> ';
                } elseif ($row["tags"] == 14) {
                    echo '<a href="#" class="designetion210">Vérifer</a> ';
                    echo '<a href="#" class="designetion201">Débutant</a> ';
                } else {
                    echo ' ';
                }
                echo "<p>{$row["points_activite"]} points</p>";
                echo "</span>";
                echo "</div>";
                echo "<hr>";
            }
        } else {
            echo "Aucun résultat trouvé";
        }

        // Fermer la connexion
        $conn->close();
        ?>
    </div>
    <!--               end of Highest points -->
    <!--          start tags part-->
    <div class="tags-part2398" style="width : 350px">
        <h4>Tags</h4>
        <ul>
            <li><a href="post.php#Analytique">Analytique</a></li>
            <li><a href="post.php#Ordinateur">Ordinateur</a></li>
            <li><a href="post.php#Developpeur">Développeur</a></li>
            <li><a href="post.php#Google">Google</a></li>
            <li><a href="post.php#Entretien">Entretien</a></li>
            <li><a href="post.php#Programmeur">Programmeur</a></li>
            <li><a href="post.php#Salaire">Salaire</a></li>
            <li><a href="post.php#Université">Université</a></li>
            <li><a href="post.php#Employe">Employé</a></li>

            <li><a href="post.php#jeux">Jeux</a></li>
            <li><a href="post.php#wow">WOW</a></li>
            <li><a href="post.php#Jobs">Jobs</a></li>
            <li><a href="post.php#HTML">HTML</a></li>
            <li><a href="post.php#CSS">CSS</a></li>
            <li><a href="post.php#JavaScript">JavaScript</a></li>


        </ul>


    </div>
    <!--          End tags part-->
    <!--        start recent post  -->
    <div class="recent-post3290" style="width : 350px">
        <h4>Recent Thread</h4>
        <div class="post-details021">
            <a href="#">
                <h5>Comment préparer un
                    entretien ?</h5>
            </a>
            <p>Ne serait-il pas formidable de savoir exaent quelles questions un
                responsable du recrent...</p>
            <small style="color: #848991">21, Mars 2024</small>
        </div>
        <hr>
        <div class="post-details021">
            <a href="#">
                <h5>Crée un site dynamique
                    rapidement ?</h5>
            </a>
            <p>Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un
                ps record ? Malheureusement...</p>
            <small style="color: #848991">20, Mars 2024</small>
        </div>
        <hr>
        <div class="post-details021">
            <a href="#">
                <h5>Combien gagnent les développeurs web</h5>
            </a>
            <p>Je pense à faire carrière dans le développement web et je me demandais...</p>
            <small style="color: #848991">16, Mars 2024</small>
        </div>

        <!--       end recent post    -->
    </div>
</section>

<style>
    section {
        display: flex;
    }

    .status-part3821 {
        flex: 1;
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
    }

    .categori-part329 {
        flex: 1;
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
    }

    .highest-part302 {
        flex: 1;
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
    }

    .tags-part2398 {
        flex: 1;
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
    }

    .recent-post3290 {
        flex: 1;
        border: 1px solid black;
        padding: 10px;
        margin: 5px;
    }

    li {
        font-size: 16px;
    }
</style>