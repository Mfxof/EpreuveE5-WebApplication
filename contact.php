
<?php
// Inclure la connexion à la base de données
include 'php/db_connect.php';

// Vérifier si le formulaire d'inscription est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insérer les données dans la base de données
    $sql = "INSERT INTO messages (pseudo, email, message) VALUES ('$pseudo', '$email', '$message')";
    if (mysqli_query($conn, $sql)) {
        // Redirection vers contact.php avec un délai de 2 secondes
        echo '<script>
                setTimeout(function() {
                    window.location.href = "contact.php";
                }, 500);
             </script>';
        // Affichage du message "Message envoyé" après la redirection
        echo '<script>
                setTimeout(function() {
                    alert("Message envoyé");
                }, 500);
             </script>';
    } else {
        // Si la requête échoue, afficher "Une erreur est survenue" en JavaScript
        echo '<script>alert("Une erreur est survenue lors de l\'envoi du message");</script>';
    }
}
?>


<?php include 'php/header.php' ?>
<title>Nous contacter</title>
<?php include 'php/navBar.php' ?>


<section class="header-descriptin329">
    <div class="container">
        <h3>Questions</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="index.php">Accueil</a></li>
            <li class="active" id="sous_class">Nous contacter</li>
        </ol>
    </div>
</section>
<section class="google-map390">
    <div class="container">
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe width="100%" height="400" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Lycée+des+métiers+René+Cassin+4+rue+Schoch,+67000+Strasbourg&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="100px" scrolling="yes" marginheight="0" marginwidth="0">
                </iframe>
            </div>
        </div>
    </div>
</section>
<section class="main-content920">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="ask-question-input-part032">
                    <h4>Nous contacter</h4>
                    <hr>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="username-part940">
                            <span class="form-description43">Pseudo* </span><input type="text" name="pseudo"
                                class="username029" placeholder="Entrer votre Pseudo" required>
                        </div>
                        <div class="email-part320">
                            <span class="form-description442">E-Mail* </span><input type="email" name="email"
                                class="email30" placeholder="Entrer votre Email" required>
                        </div>
                        <div class="question-title39">
                            <span class="form-description433">Titre de la question* </span><input type="text"
                                name="message_title" class="question-ttile32"
                                placeholder="Entrer le titre de la question" required>
                        </div>
                        <div class="question-title39">
                            <span class="form-description43313">Détails* </span>
                            <textarea name="message" class="question-details3112" placeholder="Votre message ici"
                                required></textarea>
                        </div>
                        <div class="publish-button2389">
                            <input type="submit" name="submit" class="publis1291" value="Envoyer votre question">
                        </div>
                    </form>
                </div>
            </div>

            <!-- end of col-md-9 -->

            <?php include 'php/sideContent.php' ?>
            <?php include 'php/footer.php' ?>