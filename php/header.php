<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-102282699-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-102282699-1');

        document.addEventListener('copy', (event) => {
            event.preventDefault();
            alert('Le copier-coller est désactivé sur ce site.');
        });

        window.onload = function () {
            var images = document.getElementsByTagName('img');
            for (var i = 0; i < images.length; i++) {
                images[i].oncontextmenu = function () {
                    return false;
                }
            }
        }

    </script>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="ArialGames Portfolio">
    <meta name="author" content="FREYERMUTH Matys">
    <meta name="google-site-verification" content="xrESO8fpu4QhsrLd6fdyNamdnWO_3Yw1DZW_xxLcC2A">
    <meta name="author" content="FREYERMUTH Matys">
    <meta name="Keywords"
        content="portfolio, FREYERMUTH">
    <meta name="Robots" content="all">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta property="og:title"
        content="ArialGames Portfolio">
    <meta property="og:type" content="Portfolio FREYERMUTH Matys ">
    <meta property="og:url" content="https://arial-games.000webhostapp.com/portfolio/portfolio_New">

    <!-- CSS -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- Font Awesome CSS -->
    <link href="css/all.min.css" rel="stylesheet" media="screen">
    <link href="css/fontawesome.min.css" rel="stylesheet" media="screen">

    <!--[if lte IE 7]> 
                <script src="/assets/js/icons-lte-ie7.js"></script>
            <![endif]-->

    <!-- Magnific-popup lightbox -->
    <link href="css/magnific-popup.css" rel="stylesheet"> <!-- Owl Carousel -->
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">

    <!-- Animate css -->
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styles CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen">
</head>

<body>