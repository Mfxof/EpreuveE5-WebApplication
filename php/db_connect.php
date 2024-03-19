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