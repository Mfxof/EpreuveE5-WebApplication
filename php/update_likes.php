<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données envoyées par la requête AJAX
    $postId = $_POST['postId'];
    $action = $_POST['action'];

    // Mettre à jour les likes dans la base de données en fonction de l'action
    if ($action === "increment") {
        $sql = "UPDATE posts SET likes = likes + 1 WHERE id = $postId";
    } elseif ($action === "decrement") {
        $sql = "UPDATE posts SET likes = likes - 1 WHERE id = $postId";
    }

    // Exécuter la requête SQL
    if (mysqli_query($conn, $sql)) {
        echo "Likes mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des likes: " . mysqli_error($conn);
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
