<?php include 'php/header.php' ?>
<title>FAQ</title>
<?php include 'php/navBar.php' ?>

<section class="header-descriptin329">
    <div class="container">
        <h3>Foire Aux Questions</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Foire Aux Questions</li>
        </ol>
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9 user-profile328903">
                <div class="accordion-container">
                    <div class="accordion-header">
                        <i class="fa fa-angle-right"></i> Comment puis-je contacter l'administration du fourm ?
                    </div>
                    <div class="accordion-content">
                        <br>
                        <p>Les profils des administrateurs sont dans la page <a href="about-us.php">À Propos</a>.<br>
                        Nous vous demanderons dans ce cas de ne pas harceler de message les adminstrateurs sous peine de répercution sévère.<br>
                        Vous pouvez sinon aller sur la page <a href="contact.php">Contact</a>, dans laquelle vous aurez accès à un formulaire.
                        </p>
                        <br>
                    </div>
                </div>
                <div class="accordion-container">
                    <div class="accordion-header">
                        <i class="fa fa-angle-right"></i> Comment sont utilisé mes données ?
                    </div>
                    <div class="accordion-content">
                        <br>
                        <p>Inscription et profil utilisateur : Lorsque vous vous inscrivez sur le forum, vous fournissez des informations telles que votre nom d'utilisateur, votre adresse e-mail et d'autres détails pour créer un profil. Ces informations sont utilisées pour vous identifier sur le forum et pour personnaliser votre expérience utilisateur. <br><br>
                        Publication de messages : Lorsque vous publiez des messages sur le forum, ceux-ci deviennent visibles publiquement pour les autres utilisateurs. <br> Attention à ne pas fournir des informations à caractère personnelles, sensibles censés rester confidentiel. <br><br>
                        Analyse et suivi : Le forum collecte des données sur la manière dont vous utilisez le site, telles que les pages que vous consultez, le temps passé sur le site et les interactions avec d'autres utilisateurs. <br> Ces données sont utilisées à des fins d'analyse pour améliorer le fonctionnement du forum, personnaliser le contenu affiché et fournir des recommandations pertinentes. <br><br>
                        Communication : Vos informations de contact, telles que votre adresse e-mail, peuvent être utilisées par le forum pour vous envoyer des notifications concernant vos activités sur le site, des mises à jour de la communauté ou des newsletters.. </p>
                        <br>
                    </div>
                </div>
                <div class="accordion-container">
                    <div class="accordion-header">
                        <i class="fa fa-angle-right"></i> Comment se connecter et/ou s'enregistrer ?
                    </div>
                    <div class="accordion-content">
                        <br>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                            adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                            neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                            turpis egestas. Curabitur vitae velit in neque dictum blandit. Curabitur vitae velit
                            in neque dictum blandit.Curabitur vitae velit in neque dictum blandit. </p>
                        <br>
                    </div>
                </div>
                <div class="accordion-container">
                    <div class="accordion-header">
                        <i class="fa fa-angle-right"></i> Comment envoyé un message/question sur le forum ?
                    </div>
                    <div class="accordion-content">
                        <br>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                            adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                            neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                            turpis egestas. Curabitur vitae velit in neque dictum blandit. Curabitur vitae velit
                            in neque dictum blandit.Curabitur vitae velit in neque dictum blandit. </p>
                        <br>
                    </div>
                </div>
                <div class="accordion-container">
                    <div class="accordion-header">
                        <i class="fa fa-angle-right"></i> Comment poster un thread sur le forum ?
                    </div>
                    <div class="accordion-content">
                        <br>
                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna
                            adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis
                            neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                            turpis egestas. Curabitur vitae velit in neque dictum blandit. Curabitur vitae velit
                            in neque dictum blandit.Curabitur vitae velit in neque dictum blandit. </p>
                        <br>
                    </div>
                </div>
            </div>
            <!--                end of col-md-9 -->
            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>
        </div>
    </div>
</div>


<script>
    const headers = document.querySelectorAll(".accordion-header");
    headers.forEach(header => {
        header.addEventListener("click", function() {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            this.querySelector("i").classList.remove("fa-angle-down");
            this.querySelector("i").classList.add("fa-angle-right");
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            this.querySelector("i").classList.remove("fa-angle-right");
            this.querySelector("i").classList.add("fa-angle-down");
        }
        });
    });
</script>