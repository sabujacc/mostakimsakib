<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>My Personal Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="../../../external.html?link=https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../../../external.html?link=https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="<?php bloginfo ('template_url'); ?>/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo ('template_url'); ?>/preloader.min.css" rel="stylesheet">
    <link href="<?php bloginfo ('template_url'); ?>/circle.css" rel="stylesheet">
    <link href="<?php bloginfo ('template_url'); ?>/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo ('template_url'); ?>/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="<?php bloginfo ('template_url'); ?>/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="<?php bloginfo ('template_url'); ?>/yellow.css" rel="stylesheet">
    <link rel="<?php bloginfo ('template_url'); ?>/alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="<?php bloginfo ('template_url'); ?>/stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="<?php bloginfo ('template_url'); ?>/modernizr.custom.js"></script>
</head>

<body class="home">
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="<img src="<?php bloginfo ('template_url'); ?>/index.php">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="<img src="<?php bloginfo ('template_url'); ?>/about.php">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="<img src="<?php bloginfo ('template_url'); ?>/contact.php">
                <h2>Contact</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="<img src="<?php bloginfo ('template_url'); ?>/index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="<img src="<?php bloginfo ('template_url'); ?>/about.php"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="<img src="<?php bloginfo ('template_url'); ?>/contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="<?php bloginfo ('template_url'); ?>/img-mobile.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi there !</h6>
                <h1 class="text-uppercase poppins-font"><span>I'm</span> Mostakim Sakib</h1>
                <p class="open-sans-font">I'm a Bangladeshi web designer & front‑end developer focused on crafting clean & user‑friendly experiences, I am passionate about building excellent software that improves the lives of those around me.</p>
                <a href="about.php" class="btn btn-about">more about me</a>
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->

<!-- Template JS Files -->
<script src="<?php bloginfo ('template_url'); ?>/jquery-3.5.0.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/styleswitcher.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/preloader.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/fm.revealator.jquery.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/classie.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/cbpGridGallery.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/jquery.hoverdir.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/popper.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/bootstrap.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/custom.js"></script>

</body>
</html>
