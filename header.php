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