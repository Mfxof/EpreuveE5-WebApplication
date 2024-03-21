<?php
include 'php/db_connect.php';
include 'php/token_session.php';

// Traitement du formulaire lors de la soumission
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $titre = $_POST['titre']; // Récupération du titre
    $categorie = $_POST['categorie']; // Récupération de la catégorie
    $fichier = $_POST['fichier']; // Cela devrait être récupéré différemment selon le type de fichier
    $contenu = $_POST['contenu'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO posts_inside (pseudo, email, titre, categorie, fichier, contenu) VALUES ('$pseudo', '$email', '$titre', '$categorie', '$fichier', '$contenu')";

    if (mysqli_query($conn, $sql)) {
        // Redirection vers contact.php avec un délai de 2 secondes
        echo '<script>
                setTimeout(function() {
                    window.location.href = "send_thread.php";
                }, 500);
             </script>';
        // Affichage du message "Message envoyé" après la redirection
        echo '<script>
                setTimeout(function() {
                    alert("Thread envoyé");
                }, 500);
             </script>';
    } else {
        // Si la requête échoue, afficher "Une erreur est survenue" en JavaScript
        echo '<script>alert("Une erreur est survenue lors de l\'envoi du thread");
        window.location.href = "send_thread.php";
        </script>';
    }
}

?>

<?php include 'php/header.php'; ?>
<title>Poster un thread</title>
<?php include 'php/navBar.php'; ?>

<!-- Votre code HTML pour le formulaire ici -->


<section class="header-descriptin329">
    <div class="container">
        <h3>Poster un thread</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="post.php">Thread</a></li>
            <li class="active" id="sous_class">Poster un thread</li>
        </ol>
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="ask-question-input-part032">
                    <h4>Poster un thread</h4>
                    <hr>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="username-part940">
                            <span class="form-description43">Pseudo*</span><input type="text" name="pseudo"
                                class="username029" placeholder="Mettre son Pseudo" required>
                        </div>
                        <div class="email-part320">
                            <span class="form-description442">E-Mail* </span><input type="email" name="email"
                                class="email30" placeholder="Mettre son E-mail" required>
                        </div>
                        <div class="question-title39">
                            <span class="form-description433">Titre du thread* </span><input type="text" name="titre"
                                class="question-ttile32" placeholder="Mettre le titre du thread ici" required>
                        </div>

                        <div class="categori49">
                            <span class="form-description43305">Categorie </span>
                            <label>
                                <input list="browsers" name="categorie" class="list-category53" /></label>
                            <datalist id="browsers">
                                <option value="HTML">
                                <option value="Cybersécurité">
                                <option value="Jobs">
                                <option value="Jeux">
                            </datalist>
                        </div>
                        <div class="button-group-addfile3239">
                            <span class="form-description23993">Fichier*</span><input type="file" name="fichier"
                                class="question-ttile3226">

                        </div>
                        <div class="question-title39">
                            <span class="form-description43313"></span>
                            <textarea name="contenu" class="question-details3112" placeholder="Votre message ici"
                                required></textarea>
                        </div>
                        <div class="publish-button2389">
                            <button type="submit" class="publis1291">Publier votre question</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end of col-md-9 -->
            <?php include 'php/sideContent.php'; ?>
            <?php include 'php/footer.php'; ?>