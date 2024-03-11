    <?php include 'php/header.php' ?>
    <title>Accueil</title>


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
            <button><a href="login.php">Connexion</a></button>
            <button><a href="register.php">Inscription</a></button>
        </div>

        <?php include 'php/footer.php' ?>
    </div>
</body>

</html>
