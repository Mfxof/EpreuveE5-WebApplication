</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="navbar-menu-left-side239">
                        <ul>
                            <li><a href="contact.php" target="_blank"><i class="fa fa-envelope-o"
                                        aria-hidden="true"></i>Contact</a></li>
                            <li><a href="-divers-/error.php" target="_blank"><i class="fa fa-headphones"
                                        aria-hidden="true"></i>Support</a></li>


                            <?php
                            // Check if the user is logged in
                            if (isset ($_SESSION['email'])) {
                                // If logged in, display "Mon compte" with a link to profile.php
                                echo '<li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i>Mon compte</a></li>';
                            } else {
                                // If not logged in, display "Connexion / Inscription" with a link to login.php
                                echo '<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i>Connexion / Inscription</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="navbar-serch-right-side">
                        <form class="navbar-form" id="searchForm" role="search">
                            <div class="input-group add-on">
                                <input class="form-control form-control222" placeholder="Rechercher" name="srch-term"
                                    id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-default2913" type="submit"><i
                                            class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script>
                        document.getElementById('searchForm').addEventListener('submit', function (event) {
                            event.preventDefault(); // Empêche le formulaire de se soumettre normalement

                            // Récupère le texte entré dans le champ de recherche
                            var searchQuery = document.getElementById('srch-term').value.trim();

                            // Effectue une action de recherche (par exemple, redirection vers une page de résultats de recherche)
                            if (searchQuery !== '') {
                                // Ici, vous pouvez définir l'action que vous souhaitez effectuer avec la requête de recherche,
                                // telle que la redirection vers une page de résultats de recherche
                                // Par exemple :
                                // window.location.href = 'votre_page_de_resultats_de_recherche.php?query=' + encodeURIComponent(searchQuery);
                                alert("Vous recherchez : " + searchQuery);
                            } else {
                                alert("Veuillez entrer une requête de recherche.");
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="top-menu-bottom932">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle
                            navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.php"><img src="image/Logo.png" alt="Logo-QueriWeb"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"> </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="post.php">Thread</a></li>

                        <li><a href="blog.php">Blog</a>
                        </li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Page <span class="caret"></span></a>
                            <ul class="dropdown-menu animated zoomIn">
                                <li><a href="user.php">Utlisateurs</a></li>
                                <li><a href="question_utilisateur.php">Questions</a></li>
                                <li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.php">À Propos</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>