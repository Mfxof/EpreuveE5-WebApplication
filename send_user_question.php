<?php
include 'php/db_connect.php';

// Traitement du formulaire lors de la soumission
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $question = $_POST['question'];

    // Requête SQL pour insérer les données dans la base de données
    $sql = "INSERT INTO posts_inside (pseudo, email, question) VALUES ('$pseudo', '$email', '$question')";

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
        window.location.href = "send_user_question.php";
        </script>';
    }
}

?>


<?php include 'php/header.php'; ?>
<title>Questions</title>
<?php include 'php/navBar.php'; ?>

<section class="header-descriptin329">
    <div class="container">
        <h3>Envoi de question</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="question_utilisateur.php">Questions</a></li>
            <li class="active" id="sous_class">Envoi de question</li>
        </ol>
    </div>
</section>

<p>Bon bah sa marche pas</p>

<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="ask-question-input-part032">
                    <h4>Poster une question</h4>
                    <hr>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="username-part940">
                            <span class="form-description43">Pseudo* </span><input type="text" name="pseudo"
                                class="username029" placeholder="Entrer votre pseudo" required>
                        </div>
                        <br>
                        <div class="username-part940">
                            <span class="form-description43">E-mail* </span><input type="text" name="email"
                                class="username029" placeholder="Entrer votre E-mail" required>
                        </div>
                        <div class="question-title39">
                            <span class="form-description43313">Question* </span>
                            <textarea name="question" class="question-details3112" placeholder="Votre question ici"
                                required></textarea>
                        </div>
                        <div class="publish-button2389">
                            <input type="submit" name="submit" class="publis1291" value="Envoyer votre question">
                        </div>
                    </form>
                </div>
            </div>
            <!-- fin de col-md-9 -->
            <?php include 'php/sideContent.php'; ?>
            <?php include 'php/footer.php'; ?>
