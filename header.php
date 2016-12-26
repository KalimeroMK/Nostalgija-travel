<?php require 'top-cache.php'; ?>
<?php require 'config/db.php'; ?>
<?php require 'config/metadata.php'; ?>
<?php require 'function.php';
?>
<head>
    <meta charset="utf-8">
    <title>
    <?php
    if (isset($title) && $title != NULL) {
    echo $title . " | Носталгија травел | Еднаш со Нас, Секогаш со Нас";
    } else {
    echo 'Носталгија травел | Еднаш со Нас, Секогаш со Нас';
    }
    ?>
    </title>
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Web Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway|Roboto|Pacifico|PT+Serif' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Fontello CSS -->
    <link href="/fonts/fontello/css/fontello.css" rel="stylesheet"> <!-- Plugins -->
    <link href="/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="/plugins/rs-plugin/css/settings.css" rel="stylesheet">
    <link href="/css/animations.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="/plugins/hover/hover-min.css" rel="stylesheet"> <!-- the project core CSS file -->
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
    <link href="/css/skins/light_blue.css" rel="stylesheet"> <!-- Custom css -->
    <link href="/css/custom.css" rel="stylesheet">
</head>
<body class="no-trans   "> <!-- scrollToTop --> <!-- ================ -->
<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div> <!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper"> <!-- header-container start -->
<div class="header-container">
    <div class="header-top dark ">
        <div class="container">
            <div class="row">
                <div class="col-xs-3 col-sm-6 col-md-9"> <!-- header-top-first start --> <!-- ================ -->
                <div class="header-top-first clearfix">
                    <ul class="social-links circle small clearfix hidden-xs">
                        <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                        class="fa fa-twitter"></i></a></li>
                        <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i
                        class="fa fa-linkedin"></i></a></li>
                        <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                        class="fa fa-google-plus"></i></a></li>
                        <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                        class="fa fa-facebook"></i></a></li>
                        <div class="social-links hidden-lg hidden-md hidden-sm circle small">
                            <div class="btn-group dropdown">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i
                                class="fa fa-share-alt"></i></button>
                                <ul class="dropdown-menu dropdown-animation">
                                    <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                    class="fa fa-twitter"></i></a></li>
                                    <li class="skype"><a target="_blank" href="http://www.skype.com"><i
                                    class="fa fa-skype"></i></a></li>
                                    <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i
                                    class="fa fa-linkedin"></i></a></li>
                                    <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                    class="fa fa-google-plus"></i></a></li>
                                    <li class="youtube"><a target="_blank" href="http://www.youtube.com"><i
                                    class="fa fa-youtube-play"></i></a></li>
                                    <li class="flickr"><a target="_blank" href="http://www.flickr.com"><i
                                    class="fa fa-flickr"></i></a></li>
                                    <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                    class="fa fa-facebook"></i></a></li>
                                    <li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i
                                    class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <ul class="list-inline hidden-sm hidden-xs">
                            <li><i class="fa fa-map-marker pr-5 pl-10"></i>One Infinity Loop Av, Tk 123456</li>
                            <li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>
                            <li><i class="fa fa-envelope-o pr-5 pl-10"></i> theproject@mail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div> <!-- header-top end --> <!-- header start --> <!-- classes:  -->
            <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
            <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
            <!-- "full-width": mandatory class for the full-width menu layout -->
            <!-- "centered": mandatory class for the centered logo layout --> <!-- ================ -->
            <header class="header centered fixed   clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- header-left start -->
                            <!-- ================ -->
                            <div class="header-left clearfix">
                                <!-- logo -->
                                <div id="logo" class="logo">
                                    <a href="/"><img id="logo_img" src="/images/logo.png" alt="logo"></a>
                                </div>
                            </div>
                            <!-- header-left end -->
                        </div>
                        <div class="col-md-12">
                            <!-- header-right start -->
                            <!-- ================ -->
                            <div class="header-right clearfix">
                                <!-- main-navigation start -->
                                <!-- classes: -->
                                <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                <!-- ================ -->
                                <div class="main-navigation">
                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">
                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                                data-target="#navbar-collapse-1">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <!-- main-menu -->
                                                <ul class="nav navbar-nav navbar-right">
                                                    <!-- mega-menu start -->
                                                    <!-- main-menu -->
                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li><a href="/">Почетна</a></li>
                                                        <li class="dropdown active mega-menu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Лето 2017</a>
                                                            <ul class="dropdown-menu" style="background-color: white">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-sm-4 col-md-2">
                                                                                    <h4 class="title" style="color:black;">Грција</h4>
                                                                                    <div class="divider"></div>
                                                                                    <ul class="menu">
                                                                                        <li ><a href="/kasandra"><i class="icon-suitcase pr-10"></i>Касандра</a></li>
                                                                                        <li ><a href="/sitonija"><i class="icon-suitcase pr-10"></i>Ситонија</a></li>
                                                                                        <li ><a href="/atos"><i class="icon-suitcase pr-10"></i>Атос</a></li>
                                                                                        <li ><a href="/pieria"><i class="icon-suitcase pr-10"></i>Пиериа</a></li>
                                                                                        <li ><a href="/ostrovi"><i class="icon-suitcase pr-10"></i>Острови</a></li>
                                                                                        <li ><a href="/hoteli"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-2">
                                                                                    <h4 class="title" style="color:black;">Хрватска</h4>
                                                                                    <div class="divider"></div>
                                                                                    <ul class="menu">
                                                                                        <li ><a href="/hrvatska"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-2">
                                                                                    <h4 class="title" style="color:black;">Црна Гора</h4>
                                                                                    <div class="divider"></div>
                                                                                    <ul class="menu">
                                                                                        <li ><a href="/crnagora"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                
                                                                                <div class="col-sm-4 col-md-2">
                                                                                    <h4 class="title" style="color:black;">Шпанија</h4>
                                                                                    <div class="divider"></div>
                                                                                    <ul class="menu">
                                                                                        <li ><a href="/spanija"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-2">
                                                                                    <h4 class="title" style="color:black;">Бугарија</h4>
                                                                                    <div class="divider"></div>
                                                                                    <ul class="menu">
                                                                                        <li ><a href="/bugarija"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <!-- mega-menu end -->
                                                        <li><li class="dropdown active mega-menu">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Зима 2016/17</a>
                                                            <ul class="dropdown-menu" style="background-color: white">
                                                                <li>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <div class="col-sm-4 col-md-2">
                                                                                    <h4 class="title" style="color:black;">Бугарија</h4>
                                                                                    <div class="divider"></div>
                                                                                    <ul class="menu">
                                                                                        <li ><a href="/bansko"><i class="icon-suitcase pr-10"></i>Банско</a></li>
                                                                                        <li ><a href="/borovec"><i class="icon-suitcase pr-10"></i>Боровец</a></li>
                                                                                        <li ><a href="/pamporovo"><i class="icon-suitcase pr-10"></i>Пампорово</a></li>
                                                                                        <li ><a href="/sandanski"><i class="icon-suitcase pr-10"></i>Сандански</a></li>
                                                                                        <li ><a href="/velingrad"><i class="icon-suitcase pr-10"></i>Велинград</a></li>               </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2">
                                                                                        <h4 class="title" style="color:black;">Србија</h4>
                                                                                        <div class="divider"></div>
                                                                                        <ul class="menu">
                                                                                            <li ><a href="/kopaonik"><i class="icon-suitcase pr-10"></i>Копаоник</a></li>
                                                                                            <li ><a href="/zlatibor"><i class="icon-suitcase pr-10"></i>Златибор</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2">
                                                                                        <h4 class="title" style="color:black;">Словенија</h4>
                                                                                        <div class="divider"></div>
                                                                                        <ul class="menu">
                                                                                            <li ><a href="/bled"><i class="icon-suitcase pr-10"></i>Блед</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2">
                                                                                        <h4 class="title" style="color:black;">Австрија</h4>
                                                                                        <div class="divider"></div>
                                                                                        <ul class="menu">
                                                                                            <li ><a href="/avstrija"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2">
                                                                                        <h4 class="title" style="color:black;">Франција</h4>
                                                                                        <div class="divider"></div>
                                                                                        <ul class="menu">
                                                                                            <li ><a href="/franscija"><i class="icon-suitcase pr-10"></i>Хотели</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li></li>
                                                            
                                                            <li class="dropdown">
                                                                <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Патувања</a>
                                                                <ul class="dropdown-menu" style="background-color: white">
                                                                    <li><a href="/CityBreak">City Break</a></li>
                                                                    <li><a href="/patuvanje">Далечни патувања</a></li>
                                                                    <li><a href="/novagodina">Нова Година</a></li>
                                                                    <li><a href="/8-mi">8-ми Март</a></li>
                                                                    <li><a href="/ednodnevni">Еднодневни патуванја</a></li>
                                                                </ul>
                                                            </li>
                                                             <li class="dropdown">
                                                                <a href="index-shop.html" class="dropdown-toggle" data-toggle="dropdown">Услуги</a>
                                                                <ul class="dropdown-menu" style="background-color: white">
                                                                    <li><a href="/koncerti">Концерти</a></li>
                                                                    <li><a href="/patuvanje">Rent a c car</a></li>
                                                                    <li><a href="/osiguruvawe">Осгурување</a></li>
                                                                    <li><a href="/aviobileti">Авио билети</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="/banji">Wellnes & Spa</a></li>
                                                            <li><a href="/krstarenje">Крстарења</a></li>
                                                            <li><a href="/contact">Контакт</a></li></li>
                                                        </ul>
                                                        <!-- main-menu end -->
                                                    </div>
                                                </div>
                                            </nav>
                                            <!-- navbar end -->
                                        </div>
                                        <!-- main-navigation end -->
                                    </div>
                                    <!-- header-right end -->
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- header end -->
                </div>
                <!-- header-container end -->