<!--    pied de page -->
<div class="footer-search">
    <div class="container">
        <div class="row">
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    <input id="searchInput" type="text" class="search-query form-control user-control30"
                        placeholder="Rechercher ici...." />
                    <span class="input-group-btn">
                        <button id="searchButton" class="btn btn-danger" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>

                <script>
                    document.getElementById('searchButton').addEventListener('click', function (event) {
                        event.preventDefault(); // Empêche le bouton de se comporter comme un bouton de formulaire

                        // Récupère le texte entré dans le champ de recherche
                        var searchQuery = document.getElementById('searchInput').value.trim();

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

<section class="footer-part">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="info-part-one320">
                    <h4>Où sommes-nous ?</h4>
                    <p>Lycée René Cassin</p>
                    <h4>Adresse :</h4>
                    <p>4 Rue Schoch<br> 67000 Strasbourg, France.</p>
                    <h4>Support :</h4>
                    <p>Numéro de téléphone du support : </p>
                    <p>(+33)07 XX XX XX XX</p><br>
                    <p>Email de support : </p>
                    <p>support@XXXXXX.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-part-two320">
                    <h4>Liens rapides</h4>
                    <a href="index.php">
                        <p>- Accueil</p>
                    </a>
                    <a href="send_user_question.php">
                        <p>- Poser une question</p>
                    </a>
                    <a href="question_utilisateur.php">
                        <p>- Questions</p>
                    </a>
                    <a href="user.php">
                        <p>- Utilisateurs</p>
                    </a>
                    <a href="profile.php">
                        <p>- Modifier le profil</p>
                    </a>
                    <a href="contact.php">
                        <p>- Nous contacter</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-part-three320">
                    <h4>Questions populaires</h4>
                    <div class="news-info209">

                        <h5>Pourquoi les Britanniques sont-ils confus</h5>
                        <p>Pourquoi oserais-je dire, ils n'osent pas se vexer quand ils le font ...</p>
                        <small>16 juillet 2017</small>
                    </div>
                    <div class="news-info209">
                        <h5>Comment aborder la candidature pour</h5>
                        <p>J'essaie de trouver/changer ma trajectoire professionnelle. C'est confortable ...</p>
                        <small>16 juillet 2017</small>
                    </div>
                    <div class="news-info209">
                        <h5>Comment évaluer si un</h5>
                        <p>Un ami à moi est le PDG de sa propre petite entreprise. ...</p>
                        <small>16 juillet 2017</small>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="info-part-four320">
                    <h4>Derniers Tweets</h4>
                    <div class="tweet-details29">
                        <small> il y a environ 2 semaines</small>
                        <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> codeThemesCheck une
                                nouvelle
                                mise à jour #AskMe #ThemeForest #WordPress #2code #Envato#2code
                            </a></p>
                    </div>
                    <div class="tweet-details29">
                        <small>il y a environ 2 semaines</small>
                        <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> codeThemesCheck une
                                nouvelle
                                mise à jour #AskMe #ThemeForest #WordPress #2code #Envato#2code
                            </a></p>
                    </div>
                    <div class="tweet-details29">
                        <small>il y a environ 2 semaines</small>
                        <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> codeThemesCheck une
                                nouvelle
                                mise à jour #AskMe #ThemeForest #WordPress #2code #Envato#2code
                            </a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="footer-social">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>Droits d'auteur 2024 | <strong>Arial Games</strong></p>
            </div>
            <div class="col-md-6">
                <div class="social-right3903" style="padding-left: 300px; font-size : 20px">
                    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>
</body>

</html>