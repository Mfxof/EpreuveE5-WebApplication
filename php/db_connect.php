<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}
?>