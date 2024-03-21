<!--           strart col-md-3 (side bar)-->
<aside class="col-md-3 sidebar97239">
    <div class="status-part3821" style="width : 350px">
        <h4>Statistiques</h4>

        <?php
        // Inclure la connexion à la base de données
        include 'php/db_connect.php';

        // Requête pour compter le nombre total d'entrées dans la base de données
        $sqlCountEntries = "SELECT COUNT(*) AS totalEntries FROM posts_inside";
        $resultCountEntries = $conn->query($sqlCountEntries);
        $rowCountEntries = $resultCountEntries->fetch_assoc();
        $totalEntries = $rowCountEntries['totalEntries'];

        // Initialiser le total des réponses
        $totalReponses = 0;

        // Requête pour récupérer le nombre de réponses pour chaque question et les additionner
        $sqlGetReponses = "SELECT nbReponses FROM posts WHERE tags NOT LIKE '%question%'";
        $resultGetReponses = $conn->query($sqlGetReponses);
        while ($row = $resultGetReponses->fetch_assoc()) {
            $totalReponses += $row['nbReponses'];
        }

        echo '<p class="inline"><i class="fa fa-question-circle" aria-hidden="true" style="width : 320px"> Fil de Discussion (' . $totalEntries . ')</i></p>';
        echo '<p class="inline"><i class="fa fa-comment" aria-hidden="true" style="width : 320px"> Réponses (' . $totalReponses . ')</i></p>';


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
        <div class="pints-wrapper">
            <div class="left-user3898">
                <a href="#"><img src="image/icones-user/LogoXiode.png" alt="Image"></a>
                <div class="imag-overlay39">
                    <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <span class="points-details938">
                <a href="#">
                    <h5>Freyermuth Matys</h5>
                </a>
                <a href="#" class="designetion001">Admin</a>
                <a href="#" class="designetion229">Expert</a>
                <p>23 406 points</p>
            </span>

        </div>
        <hr>



        <div class="pints-wrapper">
            <div class="left-user3898">
                <a href="#"><img src="image/icones-user/IconOzu3rol.png" alt="Image"></a>
                <div class="imag-overlay39">
                    <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <span class="points-details938">
                <a href="#">
                    <h5>CRUGNOLA Loris</h5>
                </a>
                <a href="#" class="designetion001">Admin</a>
                <a href="#" class="designetion229">Expert</a>
                <p>2065 points</p>
            </span>

        </div>
        <hr>
        <div class="pints-wrapper">
            <div class="left-user3898">
                <a href="#"><img src="image/icones-user/LogoWilliam.jpg" alt="Image"></a>
                <div class="imag-overlay39">
                    <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <span class="points-details938">
                <a href="#">
                    <h5>William Carta</h5>
                </a>
                <a href="#" class="designetion001">Admin</a>
                <a href="#" class="designetion229">Expert</a>
                <p>1264 points</p>
            </span>

        </div>
        <hr>
        <div class="pints-wrapper">
            <div class="left-user3898">
                <a href="#"><img src="image/icones-user/loutrelogo.jpg" alt="Image"></a>
                <div class="imag-overlay39">
                    <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <span class="points-details938">
                <a href="#">
                    <h5>Kirby Loutre</h5>
                </a>
                <a href="#" class="designetion210">Vérifer</a>
                <a href="#" class="designetion201">Débutant</a>
                <p>206 points</p>
            </span>

        </div>
        <hr>
        <div class="pints-wrapper">
            <div class="left-user3898">
                <a href="#"><img src="image/icones-user/logoAshley.jpg" alt="Image"></a>
                <div class="imag-overlay39">
                    <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </div>
            </div>
            <span class="points-details938">
                <a href="#">
                    <h5>Andrianarivony Ashley</h5>
                </a>
                <a href="#" class="designetion001">Admin</a>
                <a href="#" class="designetion229">Expert</a>
                <p>187 points</p>
            </span>

        </div>

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


        </ul>


    </div>
    <!--          End tags part-->
    <!--        start recent post  -->
    <div class="recent-post3290" style="width : 350px">
        <h4>Recent Post</h4>
        <div class="post-details021">
            <a href="#">
                <h5>Comment préparer un
                    entretien ?</h5>
            </a>
            <p>Ne serait-il pas formidable de savoir exactement quelles questions un
                responsable du recrutement...</p>
            <small style="color: #848991">XX, Mars 2024</small>
        </div>
        <hr>
        <div class="post-details021">
            <a href="#">
                <h5>Crée un site dynamique
                    rapidement ?</h5>
            </a>
            <p>Ne serait-il pas merveilleux de pouvoir créer un site web dynamique en un
                temps record ? Malheureusement...</p>
            <small style="color: #848991">XX, Mars 2024</small>
        </div>
        <hr>
        <div class="post-details021">
            <a href="#">
                <h5>Combien gagnent les développeurs web</h5>
            </a>
            <p>Je pense à faire carrière dans le développement web et je me demandais...</p>
            <small style="color: #848991">XX, Février 2024</small>
        </div>

        <!--       end recent post    -->

</aside>
</div>
</div>
</section>