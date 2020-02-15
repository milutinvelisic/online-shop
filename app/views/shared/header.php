<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
    <link rel="icon" href="public/img/some_img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="public/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="public/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="public/css/flaticon.css">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="public/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="public/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <link href="public/node_modules/toastr/build/toastr.css" rel="stylesheet"/>
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-11">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php?page=home"> <img src="public/img/some_img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=home">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link " href="index.php?page=shop">Shop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=contact">Contact</a>
                                </li>

                                <?php

                                if(isset($_SESSION['user']) && $_SESSION['user']->idRole == 1):

                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?page=adminHome">Admin</a>
                                </li>

                                <?php

                                endif;

                                ?>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            <div class="dropdown cart">
                                <?php

                                if(!isset($_SESSION['user'])){
                                    echo " <a id=\"login\" href=\"index.php?page=login\">Login </a>
                                <a id=\"login\" href=\"index.php?page=register\"> Register</a>";
                                }else{
                                    echo "<a id=\"logout\" href=\"index.php?page=logout\">Logout </a>";
                                }

                                ?>
                                <a class="dropdown-toggle" href="index.php?page=cart" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <a href="index.php?page=cart"> <i class="ti-bag"></i></a>
                                </a>
                            </div>
<!--                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>-->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->