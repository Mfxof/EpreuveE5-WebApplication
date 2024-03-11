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

    // Nombre de posts par page
    $posts_par_page = 5;

    // Récupérer le numéro de la page actuelle
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($page - 1) * $posts_par_page;

    // Récupérer les messages
    $sql = "SELECT * FROM posts LIMIT $offset, $posts_par_page";
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

    // Boutons pour changer de page
    $sql_total_posts = "SELECT COUNT(*) AS total FROM posts";
    $result_total_posts = mysqli_query($conn, $sql_total_posts);
    $row_total_posts = mysqli_fetch_assoc($result_total_posts);
    $total_posts = $row_total_posts['total'];
    $total_pages = ceil($total_posts / $posts_par_page);

    echo "<div class='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='forum.php?page=$i'>$i</a> ";
    }
    echo "</div>";

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
