<?php
// Démarrer la session
session_start();

// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "root", "projetwebappe5");

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


</head>

<body>

  <div class="modal-wrap">

    <div class="modal-bodies">
      <div class="modal-body modal-body-step-1 is-showing">
        <div class="title">S'inscrire</div>
        <div class="description">Bonjour, formulaire d'inscription</div>
        <form>
          <input type="text" placeholder="Username*" />
          <input type="email" placeholder="E-Mail*" />
          <input type="password" placeholder="Password*" />
          <input type="con-password" placeholder="Confirm Password*" />
          <div class="col-md-4">
            <div class="row text-center sign-with">
              <div class="col-md-12">
                <h3>
                  S'inscrire avec</h3>
              </div>
              <div class="col-md-12 sign-in28912">
                <div class="btn-group btn-group-justified">
                  <a href="#" class="btn btn-primary btn-primary3838">Facebook</a> <a href="#"
                    class="btn btn-danger btn-danger37883">
                    Google</a>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <div class="button">S'inscrire</div>
          </div>
        </form>
      </div>


    </div>
  </div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>



</body>

</html>