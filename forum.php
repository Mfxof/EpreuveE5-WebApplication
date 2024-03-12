<?php
include 'php/header.php';
include 'php/navBar.php'; ?>

<div class="postsThread">
    <a href="postsCreation.php"><img src="images/Plus-Symbol-Vector-PNG-Cutout.png" alt="Créer un thread">Poster un thread</a>
</div>
<br>
<br>
<?php

$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

$posts_par_page = 5;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * $posts_par_page;

// Handle like updates
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['like_action']) && isset($_POST['post_id'])) {
    $postId = $_POST['post_id'];
    $likeAction = $_POST['like_action'];

    if ($likeAction === 'increment') {
        $sql = "UPDATE posts SET likes = likes + 1 WHERE id = $postId";
    } elseif ($likeAction === 'decrement') {
        $sql = "UPDATE posts SET likes = likes - 1 WHERE id = $postId";
    }

    if (!mysqli_query($conn, $sql)) {
        echo "Erreur lors de la mise à jour des likes: " . mysqli_error($conn);
    }
}

// Display posts
$sql = "SELECT * FROM posts LIMIT $offset, $posts_par_page";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) <= 0) {
    echo "Aucun message trouvé.";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='thread'>";
        echo "<h2>" . $row['titre'] . "</h2>";
        echo "<p>" . $row['contenu'] . "</p>";
        echo "<p>Posté par : " . $row['utilisateur'] . " | Date : " . $row['date'] . "</p>";
        echo "<p>Likes : " . $row['likes'] . "</p>";

        // Like buttons
        echo "<form method='post'>";
        echo "<input type='hidden' name='post_id' value='" . $row['id'] . "'>";
        echo "<button type='submit' name='like_action' value='increment'>👍</button>";
        echo "<button type='submit' name='like_action' value='decrement'>👎</button>";
        echo "</form>";

        echo "</div>";
    }
}

mysqli_free_result($result);

// Pagination
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

mysqli_close($conn);

include 'php/footer.php'; ?>
