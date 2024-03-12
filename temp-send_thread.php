<?php include 'php/header.php' ?>
<title>Questions</title>
<?php include 'php/navBar.php' ?>


<section class="header-descriptin329">
    <div class="container">
        <h3>Ask Question</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active">Ask Question</li>
        </ol>
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="ask-question-input-part032">
                    <h4>Poser une question</h4>
                    <hr>
                    <form>
                        <div class="username-part940">
                            <span class="form-description43">Pseudo*</span><input type="text" name="fname"
                                class="username029" placeholder="Mettre son Pseudo">
                        </div>
                        <div class="email-part320">
                            <span class="form-description442">E-Mail* </span><input type="text" name="fname"
                                class="email30" placeholder="Mettre son Email">
                        </div>
                        <div class="question-title39">
                            <span class="form-description433">Titre de la question* </span><input type="text"
                                name="fname" class="question-ttile32" placeholder="Mettre le titre de la question ici">
                        </div>

                        <div class="categori49">
                            <span class="form-description43305">Categorie* </span>
                            <label>
                                <input list="browsers" name="myBrowser" class="list-category53" /></label>
                            <datalist id="browsers">
                                <option value="Front_End Web Developer">
                                <option value="Back-End develoer">
                                <option value="Andriod Developer">
                                <option value="Web Application">
                                <option value="System Analyst">
                                <option value="Security">
                            </datalist>
                        </div>
                        <div class="button-group-addfile3239">
                            <span class="form-description23993">Fichier*</span><input type="file" name="ffile"
                                class="question-ttile3226">

                        </div>
                        <div class="details2-239">
                            <div class="col-md-12 nopadding">
                                <textarea id="txtEditor">A modifier</textarea>
                            </div>
                        </div>

                    </form>
                    <div class="publish-button2389">
                        <button type="button" class="publis1291">Publier votre question</button>
                    </div>

                </div>


            </div>
            <!--                end of col-md-9 -->
            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>