<?php
ob_start();
session_start();


error_reporting(0);
require_once "config.php";
require_once 'nedmin/netting/baglan.php';


?>

<!doctype html>
<html lang="en">

<head>
<link rel="shortcut icon" href="images/flaticon/favicon.ico">
	<!-- Author Meta -->
	<meta name="author" content="<?php echo $lang['author'] ?>">
	<!-- Meta Description -->
	<meta name="description" content="<?php echo $lang['description'] ?>">
	<!-- Meta Keyword -->
	<meta name="keywords" content="<?php echo $lang['keywords'] ?>">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?php echo $lang['title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>

</style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <div class="mb-0 site-logo"><a href="index.php" class="mb-0">Çağış Yurdu<span class="text-primary">.</span> </a></div>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li class="active"><a href="index.php" class="nav-link"><?php echo $lang['home'] ?></a></li>
                                <li><a href="about.php" class="nav-link"><?php echo $lang['about'] ?></a></li>
                                <li class="has-children">
                                    <a href="hizmet.php" class="nav-link"><?php echo $lang['hizmet'] ?></a>
                                    <ul class="dropdown">
                                        <li><a href="hijyen.php" class="nav-link"><?php echo $lang['hijyen'] ?></a></li>
                                        <li><a href="remote.php" class="nav-link"><?php echo $lang['uzem'] ?></a></li>
                                    </ul>
                                </li>
                                <li><a href="galeri.php" class="nav-link"><?php echo $lang['galeri'] ?></a></li>
                                <li><a href="contact.php" class="nav-link"><?php echo $lang['contact'] ?></a></li>
                                <li class="has-children">
                                    <a href="#" class="nav-link"> <span class="flaticon-translator"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="<?=$kategoricek['kategori_ad']?>?lang=tr" class="nav-link"><?php echo $lang['lang_tr'] ?></a></li>
                                        <li><a href="<?=$kategoricek['kategori_ad']?>?lang=en" class="nav-link"><?php echo $lang['lang_en'] ?></a></li>
                                        <li><a href="<?=$kategoricek['kategori_ad']?>?lang=arb" class="nav-link"><?php echo $lang['lang_arb'] ?></a></li>
                                        <li><a href="<?=$kategoricek['kategori_ad']?>?lang=fr" class="nav-link"><?php echo $lang['lang_fr'] ?></a></li>
                                  
                                    </ul>
                                </li>
                                <li><a href="https://goo.gl/maps/WD6A2eqSwa74iFrz8" class="nav-link"><?php echo $lang['yol'] ?><span class="flaticon-send-2"></span></a> </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>
                </div>
            </div>
        </header>