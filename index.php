    <?php include 'php/header.php' ?>
    <title>Accueil</title>
    <link class="logo" rel="icon" type="image/png" href="images/LogoSite.jpg"/>
</head>

<body>
    <div class="container">
        <!-- Logo et options start -->
        <div class="top-bar">
            <div class="logo">
                <img src="images/LogoSite_NoBG.png" alt="Logo">
            </div>
            <div class="options">
                <div class="language">
                    <a href="#" class="flag-icon">🇺🇸</a>
                    <a href="#" class="flag-icon">🇫🇷</a>
                    <!-- Ajoutez d'autres drapeaux pour d'autres langues -->
                </div>
                <div class="currency">
                    <a href="#">$</a>
                    <a href="#">€</a>
                    <!-- Ajoutez d'autres symboles de devise pour d'autres devises -->
                </div>
                <div class="wishlist">
                    <a href="#">Liste de souhaits</a>
                </div>
                <div class="account">
                    <a href="#">Mon compte</a>
                </div>
            </div>
        </div>
        <!-- Logo et options end -->

        <!-- Home start -->
        <section>
          
        </section>
        <!-- Home end -->

        <?php include 'php/navBar.php' ?>

        <div class="forum">
            <h1>Bienvenue sur le forum !</h1>
            
            <!-- Fil de discussion 1 -->
            <div class="thread">
                <h2>Titre du fil de discussion 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel aliquet libero. Fusce id ligula in nunc posuere tincidunt non ut dolor. Donec posuere arcu eget enim efficitur, id interdum justo vulputate.</p>
                <p>Posté par : Utilisateur123 | Date : 22 février 2024</p>
            </div>

            <!-- Fil de discussion 2 -->
            <div class="thread">
                <h2>Titre du fil de discussion 2</h2>
                <p>Sed quis consequat nisi. In id purus diam. Nunc nec luctus libero. Sed malesuada malesuada ex, nec malesuada ligula tincidunt vel.</p>
                <p>Posté par : Utilisateur456 | Date : 21 février 2024</p>
            </div>
        </div>

        <div>
            <button><a href="auth/login.php">Connexion</a></button>
            <button><a href="auth/register.php">Inscription</a></button>
        </div>

        <?php include 'php/footer.php' ?>
    </div>
</body>

</html>
