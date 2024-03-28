<?php include 'php/token_session.php' ?>
<?php include 'php/header.php' ?>
<title>Thread</title>
<?php include 'php/navBar.php' ?>


<section class="header-descriptin329">
    <div class="container">
        <h3>Thread</h3>
        <ol class="breadcrumb breadcrumb839">
            <li><a href="#">Home</a></li>
            <li><a href="#">Thread</a></li>
            <li class="active">This Is My first Question</li>
        </ol>
    </div>
</section>





















<?php include 'php/db_connect.php';



if (isset($_GET['id'])) {
    // Récupérer l'ID de l'article depuis les paramètres GET
    $blog_id = $_GET['id'];

    // Requête pour récupérer les détails de l'article à partir de la base de données
    $sql = "SELECT * FROM posts WHERE id = $blog_id";
    $result = mysqli_query($conn, $sql);

    // Vérifier s'il y a des données
    if (mysqli_num_rows($result) > 0) {
        // Afficher les détails de l'article
        $row = mysqli_fetch_assoc($result);

        // Mettre à jour le nombre de vues dans la base de données
        $new_views = $row['nbVues'] + 1;
        $update_sql = "UPDATE posts SET nbVues = $new_views WHERE id = $blog_id";
        mysqli_query($conn, $update_sql);

        ?>


        <section class="main-content920">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="post-details">
                            <div class="details-header923">
                                <?php
                                echo "<img src='image/thread-bg/{$row["imageBg"]}.jpg' alt='ImageThread' class='img-responsive'>"; ?>
                                <div class="blog-details3902">
                                    <h3><span><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                        <?php echo $row['titre']; ?>
                                    </h3>
                                    <hr>
                                    <div class="ques-icon-info2933">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true">
                                                <?php echo $row['auteur']; ?>
                                            </i></a>
                                        <a><i class="fa fa-calendar" aria-hidden="true">
                                                <?php echo $row['created_at']; ?>
                                            </i></a>
                                        <a href="#"><i class="fa fa-briefcase" aria-hidden="true">
                                                <?php echo $row['tags']; ?>
                                            </i></a>
                                        <a><i class="fa fa-comments-o" aria-hidden="true">
                                                <?php echo $row['nbReponses']; ?> commentaires
                                            </i></a>
                                        <a><i class="fa fa-eye" aria-hidden="true">
                                                <?php echo $new_views; ?> vues
                                            </i></a>
                                    </div>
                                    <p>
                                        <?php echo $row['contenu']; ?>
                                    </p>
                                </div>
                            </div>







































































                            
                            
                            
                            
                            


                            


                            <!-- Affichage des commentaires -->
                            <div class="comment-section">
                                <h4>Commentaires :</h4>
                                <?php
                                // Requête pour récupérer les commentaires de l'article avec les détails de l'utilisateur
                                $sql_comments = "SELECT c.contenu, u.nom, u.prenom 
                     FROM commentaires_thread c 
                     JOIN Utilisateurs u ON c.user_id = u.id 
                     WHERE c.thread_id = $thread_id";
                                $result_comments = mysqli_query($conn, $sql_comments);

                                if (mysqli_num_rows($result_comments) > 0) {
                                    while ($row_comment = mysqli_fetch_assoc($result_comments)) {
                                        echo '<div class="comment">';
                                        echo '<p><strong>' . $row_comment['nom'] . ' ' . $row_comment['prenom'] . '</strong>: ' . $row_comment['contenu'] . '</p>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "<p>Aucun commentaire pour le moment.</p>";
                                }
                                ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php
    } else {
        echo "Article non trouvé";
    }
} else {
    echo "ID de l'article non spécifié";
}

// Inclure le pied de page et fermer la connexion à la base de données
include 'php/sideContent.php';
include 'php/footer.php';
mysqli_close($conn);
?>










 

                <!-- 
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="post-title-left129">
                                                <h3>This Is My first Question</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="post-que-rep-rihght320"> <a href="#"><i
                                                        class="fa fa-question-circle" aria-hidden="true"></i>
                                                    Question</a> <a href="#" class="r-clor10">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-details-info1982">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida
                                        odio,
                                        sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet
                                        consequat.
                                        Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed
                                        commodo
                                        velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi
                                        tristique
                                        senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a
                                        aliquet
                                        rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque
                                        blandit
                                        posuere turpis, eget auctor felis pharetra eu .</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida
                                        odio,
                                        sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet
                                        consequat.
                                        Vivamus vulputate posuere nisl quis consequat. Donec congue commodo mi, sed
                                        commodo
                                        velit fringilla ac. Fusce placerat venenatis mi. Pellentesque habitant morbi
                                        tristique
                                        senectus et netus et malesuada fames ac turpis egestas. Cras ornare, dolor a
                                        aliquet
                                        rutrum, dolor turpis condimentum leo, a semper lacus purus in felis. Quisque
                                        blandit
                                        posuere turpis, eget auctor felis pharetra eu .</p>
                                    <hr>
                                    <div class="post-footer29032">
                                        <div class="l-side2023"> <i class="fa fa-check check2" aria-hidden="true">
                                                solved</i> <a href="#"><i class="fa fa-star star2" aria-hidden="true">
                                                    5</i></a> <i class="fa fa-folder folder2" aria-hidden="true">
                                                wordpress</i> <i class="fa fa-clock-o clock2" aria-hidden="true"> 4 min
                                                ago</i> <a href="#"><i class="fa fa-commenting commenting2"
                                                    aria-hidden="true"> 5 answer</i></a> <i class="fa fa-user user2"
                                                aria-hidden="true"> 70 views</i> </div>
                                        <div class="l-rightside39">
                                            <button type="button" class="tolltip-button thumbs-up2"
                                                data-toggle="tooltip" data-placement="bottom" title="Like"><i
                                                    class="fa fa-thumbs-o-up " aria-hidden="true"></i></button>
                                            <button type="button" class="tolltip-button  thumbs-down2"
                                                data-toggle="tooltip" data-placement="bottom" title="Dislike"><i
                                                    class="fa fa-thumbs-o-down" aria-hidden="true"></i></button> <span
                                                class="single-question-vote-result">+22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="share-tags-page-content12092">
                                <div class="l-share2093"> <i class="fa fa-share" aria-hidden="true"> Share</i> </div>
                                <div class="R-tags309"> <i class="fa fa-tags" aria-hidden="true"> Wordpress, Question,
                                        Developer</i> </div>
                            </div>
                            <div class="author-details8392">
                                <div class="author-img202l"> <img src="image/images.png" alt="image">
                                    <div class="au-image-overlay text-center"> <a href="#"><i
                                                class="fa fa-plus-square-o" aria-hidden="true"></i></a> </div>
                                </div> <span class="author-deatila04re">
                                    <h5>About the Author</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor
                                        neque. Nullam
                                        lobortis, sapien vitae lobortis tristique.</p>

                                </span>
                            </div>
                            <div class="related3948-question-part">
                                <h3>Related questions</h3>
                                <hr>
                                <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This Is My
                                        Second Poll
                                        Question</a></p>
                                <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This is my
                                        third
                                        Question</a></p>
                                <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This is my
                                        fourth
                                        Question</a></p>
                                <p><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>This is my
                                        fifth
                                        Question</a></p>
                            </div>
                            <div class="comment-list12993">
                                <div class="container">
                                    <div class="row">

                                        <div class="comments-container">
                                            <ul id="comments-list" class="comments-list">
                                                <li>
                                                    <div class="comment-main-level">
                                                        // Avatar
                                                        <div class="comment-avatar"><img src="image/images.png" alt="">
                                                        </div>
                                                        // Contenedor del Comentario
                                                        <div class="comment-box">
                                                            <div class="comment-head">
                                                                <h6 class="comment-name"><a href="#">Lorena Rojero</a>
                                                                </h6>
                                                                <span><i class="fa fa-clock-o" aria-hidden="true">
                                                                        January 15 ,
                                                                        2014 at 10:00 pm</i></span> <i
                                                                    class="fa fa-reply"></i>
                                                                <i class="fa fa-heart"></i>
                                                            </div>
                                                            <div class="comment-content"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Velit omnis animi et iure
                                                                laudantium vitae, praesentium optio, sapiente distinctio
                                                                illo?
                                                            </div>
                                                        </div>
                                                    </div>
















                                                    <ul class="comments-list reply-list">
                                                        <li>
                                                            <div class="comment-avatar"><img src="image/images.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment-box">
                                                                <div class="comment-head">
                                                                    <h6 class="comment-name"><a href="#">Lorena
                                                                            Rojero</a></h6>
                                                                    <span><i class="fa fa-clock-o" aria-hidden="true">
                                                                            January
                                                                            15 , 2014 at 10:00 pm</i></span> <i
                                                                        class="fa fa-reply"></i> <i
                                                                        class="fa fa-heart"></i>
                                                                </div>
                                                                <div class="comment-content"> Lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur adipisicing elit. Velit omnis animi et
                                                                    iure
                                                                    laudantium vitae, praesentium optio, sapiente
                                                                    distinctio
                                                                    illo? </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-avatar"><img src="image/images.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment-box">
                                                                <div class="comment-head">
                                                                    <h6 class="comment-name by-author"><a
                                                                            href="#">Agustin
                                                                            Ortiz</a></h6> <span><i
                                                                            class="fa fa-clock-o" aria-hidden="true">
                                                                            January 15 , 2014 at 10:00
                                                                            pm</i></span> <i class="fa fa-reply"></i> <i
                                                                        class="fa fa-heart"></i>
                                                                </div>
                                                                <div class="comment-content"> Lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur adipisicing elit. Velit omnis animi et
                                                                    iure
                                                                    laudantium vitae, praesentium optio, sapiente
                                                                    distinctio
                                                                    illo? </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comment-avatar"><img src="image/images.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment-box">
                                                                <div class="comment-head">
                                                                    <h6 class="comment-name"><a href="#">Lorena
                                                                            Rojero</a></h6>
                                                                    <span><i class="fa fa-clock-o" aria-hidden="true">
                                                                            January
                                                                            15 , 2014 at 10:00 pm</i></span> <i
                                                                        class="fa fa-reply"></i> <i
                                                                        class="fa fa-heart"></i>
                                                                </div>
                                                                <div class="comment-content"> Lorem ipsum dolor sit
                                                                    amet,
                                                                    consectetur adipisicing elit. Velit omnis animi et
                                                                    iure
                                                                    laudantium vitae, praesentium optio, sapiente
                                                                    distinctio
                                                                    illo? </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comment-main-level">
                                                        // Avatar
                                                        <div class="comment-avatar"><img src="image/images.png" alt="">
                                                        </div>
                                                        // Contenedor del Comentario
                                                        <div class="comment-box">
                                                            <div class="comment-head">
                                                                <h6 class="comment-name"><a href="#">Lorena Rojero</a>
                                                                </h6>
                                                                <span><i class="fa fa-clock-o" aria-hidden="true">
                                                                        January 15 ,
                                                                        2014 at 10:00 pm</i></span> <i
                                                                    class="fa fa-reply"></i>
                                                                <i class="fa fa-heart"></i>
                                                            </div>
                                                            <div class="comment-content"> Lorem ipsum dolor sit amet,
                                                                consectetur adipisicing elit. Velit omnis animi et iure
                                                                laudantium vitae, praesentium optio, sapiente distinctio
                                                                illo?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment289-box">
                                <h3>Leave A Reply</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="replay-input-name42389">
                                            <p>Name*</p>
                                            <input type="text" class="name-box24894 input238-design" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="replay-email-input89298">
                                            <p>E-mail*</p>
                                            <input type="text" class="name-box24894 input238-design"
                                                placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="replay-input-websit128923">
                                            <p>Website*</p>
                                            <input type="text" class="name-box24894 input238-design"
                                                placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="post9320-box">
                                            <input type="text" class="comment-input219882"
                                                placeholder="Enter Your Post">
                                        </div>
                                        <button type="button" class="pos393-submit">Post Your Answer</button>
                                    </div>

                                </div>
                            </div>
                    </div>
                -->