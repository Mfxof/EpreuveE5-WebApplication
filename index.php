<?php include 'php/token_session.php' ?>
<?php include 'php/header.php' ?>
<title>Accueil</title>
<?php include 'php/navBar.php' ?>

<!--=======Section bienvenue=====-->
<section class="welcome-part-one">
    <div class="container">
        <div class="welcome-demop102 text-center">
            <h2>Bienvenue sur <strong>QueriWeb</strong>, un modèle impressionnant de questions et réponses</h2>
            <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.
                Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. Pellentesque
                <br> habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur vitae
                velit in neque dictum blandit
            </p>
            <div class="button0239-item">
                <a href="about-us.php">
                    <button type="button" class="aboutus022">À propos de nous</button>
                </a>
                <a href="login.php" target="_blank">
                    <button type="button" class="join92">Nous rejoindre maintenant</button>
                </a>
            </div>
            <div class="form-style8292">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-pencil-square" aria-hidden="true"></i></span>
                    <input id="searchInput" type="text" class="form-control form-control8392"
                        placeholder="Posez n'importe quelle question et vous trouverez sûrement votre réponse">
                    <span class="input-group-addon"><a href="#" id="searchLink">Rechercher</a></span>
                </div>
            </div>

            <script>
                document.getElementById('searchLink').addEventListener('click', function (event) {
                    event.preventDefault(); // Empêche le lien de se comporter comme un lien normal

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
</section>

<?php include 'php/bottomContent.php' ?>
<?php include 'php/footer.php' ?>