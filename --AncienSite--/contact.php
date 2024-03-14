<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

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


<div class="container">
  <div class="forum">
    <h1>Contactez-nous</h1>
    <div class="contact-form">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
          <label for="pseudo">*Nom :</label>
          <input type="text" id="pseudo" name="pseudo" required>
        </div>
        <div class="form-group">
          <label for="email">*Email :</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">*Message :</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </div>
  </div>
</div>


<?php include 'php/footer.php' ?>