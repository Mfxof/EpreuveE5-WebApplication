<?php
include 'php/db_connect.php';

// Vérifier la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué: " . mysqli_connect_error());
}

// Vérifier si le formulaire de connexion est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    // Vérifier les informations d'identification dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row && password_verify($mot_de_passe, $row['mot_de_passe'])) {
        $_SESSION['email'] = $email;
        header("Location: profile.php");
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="title" content="Ask online Form">
    <meta name="description"
        content="The Ask is a bootstrap design help desk, support forum website template coded and designed with bootstrap Design, Bootstrap, HTML5 and CSS. Ask ideal for wiki sites, knowledge base sites, support forum sites">
    <meta name="keywords"
        content="HTML, CSS, JavaScript,Bootstrap,js,Forum,webstagram ,webdesign ,website ,web ,webdesigner ,webdevelopment">
    <meta name="robots" content="index, nofollow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/loginstyle.css">

    <link class="logo" rel="icon" type="image/png" href="image/Logo.png" />
    <title>Connexion</title>
</head>

<body>

    <div class="modal-wrap">

        <div class="modal-bodies">
            <div class="modal-body modal-body-step-1 is-showing">
                <div class="title">Connexion</div>
                <div class="description">Bonjour, connectez vous</div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="email" placeholder="Email" name="email" required><br>
                    <input type="password" placeholder="Mot de passe" name="mot_de_passe" required><br>
                    <input class="button" type="submit" value="Se connecter" required>
                    <a href="register.php">
                        <div class="button">CREE UN COMPTE</div>
                    </a>
                </form>


                </form>
            </div>


        </div>
    </div>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>



</body>

</html>