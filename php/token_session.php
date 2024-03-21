<?php
session_start();

// Vérifie si l'email est défini dans la session et s'il n'est pas vide
if (isset ($_SESSION['email']) && !empty ($_SESSION['email'])) {
    // Si l'email est défini et n'est pas vide, tu peux le récupérer
    $email = $_SESSION['email'];
    // Charge la page normalement ou exécute les actions nécessaires
}
?>