<?php include 'php/header.php'; ?>

<title>Forum</title>

<?php include 'php/navBar.php'; ?>

<div class="forum">
    <h1>Bienvenue sur le forum !</h1>

    <?php
    // Connexion à la base de données
    $conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

    // Vérifier la connexion
    if (!$conn) {
        die("La connexion à la base de données a échoué: " . mysqli_connect_error());
    }

    // Récupérer les messages
    $sql = "SELECT * FROM posts";
    $result = mysqli_query($conn, $sql);

    // Vérifier les erreurs
    if (!$result) {
        die("Erreur dans la requête SQL: " . mysqli_error($conn));
    }

    // Afficher les messages
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='thread'>";
            echo "<h2>" . $row['titre'] . "</h2>";
            echo "<p>" . $row['contenu'] . "</p>";
            echo "<p>Posté par : " . $row['utilisateur'] . " | Date : " . $row['date'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "Aucun message trouvé.";
    }

    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données du formulaire
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $utilisateur = $_POST['utilisateur'];

        // Préparer et exécuter la requête SQL d'insertion
        $insert_query = "INSERT INTO posts (titre, contenu, utilisateur) VALUES ('$titre', '$contenu', '$utilisateur')";
        if (mysqli_query($conn, $insert_query)) {
            echo "Nouveau fil de discussion créé avec succès.";
        } else {
            echo "Erreur lors de la création du fil de discussion: " . mysqli_error($conn);
        }
    }

    // Fermer la connexion à la base de données
    mysqli_close($conn);
    ?>
    <a href="postsCreation.php">Poster un thread</a>
</div>

<?php include 'php/footer.php'; ?>
