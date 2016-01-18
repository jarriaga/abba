<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Smarty - Multipurpose + Admin</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">

<!-- SLIDE TOP -->
<div id="slidetop">

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <h6><i class="icon-heart"></i> WHY SMARTY?</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et, iaculis ac massa. </p>
            </div>

            <div class="col-md-4">
                <h6><i class="icon-attachment"></i> RECENTLY VISITED</h6>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> This is a very long text, very very very very very very very very very very very very </a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Dolor sit amet,consectetur adipiscing elit amet</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Consectetur adipiscing elit amet,consectetur adipiscing elit</a></li>
                </ul>
            </div>

            <div class="col-md-4">
                <h6><i class="icon-envelope"></i> CONTACT INFO</h6>
                <ul class="list-unstyled">
                    <li><b>Address:</b> PO Box 21132, Here Weare St, <br /> Melbourne, Vivas 2355 Australia</li>
                    <li><b>Phone:</b> 1-800-565-2390</li>
                    <li><b>Email:</b> <a href="mailto:support@yourname.com">support@yourname.com</a></li>
                </ul>
            </div>

        </div>

    </div>

    <a class="slidetop-toggle" href="#"><!-- toggle button --></a>

</div>
<!-- /SLIDE TOP -->


<!-- wrapper -->
<div id="wrapper">


    <!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .noborder 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent noborder"
    -->
    <div id="header" class="sticky clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box">
                            <form action="page-search-result-1.html" method="get">
                                <div class="input-group">
                                    <input type="text" name="src" placeholder="Search" class="form-control" />
											<span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->

                    <!-- QUICK SHOP CART -->
                    <li class="quick-cart">
                        <a href="#">
                            <span class="badge badge-aqua btn-xs badge-corner">2</span>
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <div class="quick-cart-box">
                            <h4>Shop Cart</h4>

                            <div class="quick-cart-wrapper">

                                <a href="#"><!-- cart item -->
                                    <img src="assets/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
                                    <h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
                                    <small>$37.21</small>
                                </a><!-- /cart item -->

                                <a href="#"><!-- cart item -->
                                    <img src="assets/images/demo/people/300x300/5-min.jpg" width="45" height="45" alt="" />
                                    <h6><span>2x</span> THIS IS A VERY LONG TEXT AND WILL BE TRUNCATED</h6>
                                    <small>$17.18</small>
                                </a><!-- /cart item -->

                                <!-- cart no items example -->
                                <!--
                                <a class="text-center" href="#">
                                    <h6>0 ITEMS ON YOUR CART</h6>
                                </a>
                                -->

                            </div>

                            <!-- quick cart footer -->
                            <div class="quick-cart-footer clearfix">
                                <a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
                                <span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
                            </div>
                            <!-- /quick cart footer -->

                        </div>
                    </li>
                    <!-- /QUICK SHOP CART -->

                </ul>
                <!-- /BUTTONS -->


                <!-- Logo -->
                <a class="logo pull-left" href="index.html">
                    <img src="assets/images/logo_dark.png" alt="" />
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse pull-right nav-main-collapse collapse">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li class="dropdown active"><!-- HOME -->
                                <a class="dropdown" href="/">
                                    HOME
                                </a>

                            </li>
                            <li class="dropdown mega-menu"><!-- PORTFOLIO -->
                                <a class="dropdown-toggle" href="#">
                                    ESTADOS
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">

                                                    <li><a href=''>Aguascalientes</a></li>
                                                    <li><a href=''>Baja California</a></li>
                                                    <li><a href=''>Baja California Sur</a></li>
                                                    <li><a href=''>Campeche</a></li>
                                                    <li><a href=''>Chiapas</a></li>
                                                    <li><a href=''>Chihuahua</a></li>
                                                    <li><a href=''>Coahuila</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">


                                                    <li><a href=''>Colima</a></li>
                                                    <li><a href=''>Distrito Federal</a></li>
                                                    <li><a href=''>Durango</a></li>
                                                    <li><a href=''>Estado de México</a></li>
                                                    <li><a href=''>Guanajuato</a></li>
                                                    <li><a href=''>Guerrero</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">


                                                    <li><a href=''>Hidalgo</a></li>
                                                    <li><a href=''>Jalisco</a></li>
                                                    <li><a href=''>Michoacán</a></li>
                                                    <li><a href=''>Morelos</a></li>
                                                    <li><a href=''>Nayarit</a></li>
                                                    <li><a href=''>Nuevo León</a></li>
                                                 </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">


                                                    <li><a href=''>Oaxaca</a></li>
                                                    <li><a href=''>Puebla</a></li>
                                                    <li><a href=''>Querétaro</a></li>
                                                    <li><a href=''>Quintana Roo</a></li>
                                                    <li><a href=''>San Luis Potosí</a></li>
                                                    <li><a href=''>Sinaloa</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">


                                                    <li><a href=''>Sonora</a></li>
                                                    <li><a href=''>Tabasco</a></li>
                                                    <li><a href=''>Tamaulipas</a></li>
                                                    <li><a href=''>Tlaxcala</a></li>
                                                    <li><a href=''>Veracruz</a></li>
                                                    <li><a href=''>Yucatán</a></li>
                                                    <li><a href=''>Zacatecas</a></li>

                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- BLOG -->
                                <a class="dropdown-toggle" href="#">
                                    BLOG
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            DEFAULT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-default-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-default-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-default-aside-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="blog-default-fullwidth.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            GRID
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-column-2colums.html">2 COLUMNS</a></li>
                                            <li><a href="blog-column-3colums.html">3 COLUMNS</a></li>
                                            <li><a href="blog-column-4colums.html">4 COLUMNS</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-column-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-column-aside-right.html">RIGHT SIDEBAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            MASONRY
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-masonry-2colums.html">2 COLUMNS</a></li>
                                            <li><a href="blog-masonry-3colums.html">3 COLUMNS</a></li>
                                            <li><a href="blog-masonry-4colums.html">4 COLUMNS</a></li>
                                            <li><a href="blog-masonry-fullwidth.html">FULLWIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            TIMELINE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-timeline-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-timeline-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-timeline-right-aside-right.html">RIGHT + TIMELINE RIGHT</a></li>
                                            <li><a href="blog-timeline-right-aside-left.html">LEFT + TIMELINE RIGHT</a></li>
                                            <li><a href="blog-timeline-fullwidth-left.html">FULL WIDTH - LEFT</a></li>
                                            <li><a href="blog-timeline-fullwidth-right.html">FULL WIDTH - RIGHT</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SMALL IMAGE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-smallimg-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-aside-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-fullwidth.html">FULL WIDTH</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-smallimg-alternate-1.html">ALTERNATE 1</a></li>
                                            <li><a href="blog-smallimg-alternate-2.html">ALTERNATE 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SINGLE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-single-default.html">DEFAULT</a></li>
                                            <li><a href="blog-single-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-single-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-single-fullwidth.html">FULL WIDTH</a></li>
                                            <li><a href="blog-single-small-image-left.html">SMALL IMAGE - LEFT</a></li>
                                            <li><a href="blog-single-small-image-right.html">SMALL IMAGE - RIGHT</a></li>
                                            <li><a href="blog-single-big-image.html">BIG IMAGE</a></li>
                                            <li><a href="blog-single-fullwidth-image.html">FULLWIDTH IMAGE</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            COMMENTS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-comments-bordered.html#comments">BORDERED COMMENTS</a></li>
                                            <li><a href="blog-comments-default.html#comments">DEFAULT COMMENTS</a></li>
                                            <li><a href="blog-comments-facebook.html#comments">FACEBOOK COMMENTS</a></li>
                                            <li><a href="blog-comments-disqus.html#comments">DISQUS COMMENTS</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- SHOP -->
                                <a class="dropdown-toggle" href="#">
                                    SHOP
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            1 COLUMN
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-1col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-1col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-1col-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="shop-1col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            2 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-2col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-2col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-2col-both.html">BOTH SIDEBAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            3 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-3col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-3col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-3col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            4 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-4col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-4col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-4col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SINGLE PRODUCT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-single-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-single-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-single-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="shop-single-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-compare.html">COMPARE</a></li>
                                    <li><a href="shop-cart.html">CART</a></li>
                                    <li><a href="shop-checkout.html">CHECKOUT</a></li>
                                    <li><a href="shop-checkout-final.html">ORDER PLACED</a></li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu"><!-- SHORTCODES -->
                                <a class="dropdown-toggle" href="#">
                                    SHORTCODES
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-animations.html">ANIMATIONS</a></li>
                                                    <li><a href="shortcode-buttons.html">BUTTONS</a></li>
                                                    <li><a href="shortcode-carousel.html">CAROUSEL</a></li>
                                                    <li><a href="shortcode-charts.html">GRAPHS</a></li>
                                                    <li><a href="shortcode-clients.html">CLIENTS</a></li>
                                                    <li><a href="shortcode-columns.html">GRID &amp; COLUMNS</a></li>
                                                    <li><a href="shortcode-counters.html">COUNTERS</a></li>
                                                    <li><a href="shortcode-forms.html">FORM ELEMENTS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-dividers.html">DIVIDERS</a></li>
                                                    <li><a href="shortcode-icon-boxes.html">BOXES &amp; ICONS</a></li>
                                                    <li><a href="shortcode-galleries.html">GALLERIES</a></li>
                                                    <li><a href="shortcode-headings.html">HEADING STYLES</a></li>
                                                    <li><a href="shortcode-icon-lists.html">ICON LISTS</a></li>
                                                    <li><a href="shortcode-labels.html">LABELS &amp; BADGES</a></li>
                                                    <li><a href="shortcode-lightbox.html">LIGHTBOX</a></li>
                                                    <li><a href="shortcode-forms-editors.html">HTML EDITORS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-list-pannels.html">LIST &amp; PANNELS</a></li>
                                                    <li><a href="shortcode-maps.html"><span class="label label-success pull-right">new</span> MAPS</a></li>
                                                    <li><a href="shortcode-media-embeds.html">MEDIA EMBEDS</a></li>
                                                    <li><a href="shortcode-modals.html">MODAL / POPOVER / NOTIF</a></li>
                                                    <li><a href="shortcode-navigations.html">NAVIGATIONS</a></li>
                                                    <li><a href="shortcode-paginations.html">PAGINATIONS</a></li>
                                                    <li><a href="shortcode-progress-bar.html">PROGRESS BARS</a></li>
                                                    <li><a href="shortcode-widgets.html">WIDGETS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-pricing.html">PRICING BOXES</a></li>
                                                    <li><a href="shortcode-process-steps.html">PROCESS STEPS</a></li>
                                                    <li><a href="shortcode-callouts.html">CALLOUTS</a></li>
                                                    <li><a href="shortcode-info-bars.html">INFO BARS</a></li>
                                                    <li><a href="shortcode-blockquotes.html">BLOCKQUOTES</a></li>
                                                    <li><a href="shortcode-responsive.html">RESPONSIVE</a></li>
                                                    <li><a href="shortcode-sections.html">SECTIONS</a></li>
                                                    <li><a href="shortcode-social-icons.html">SOCIAL ICONS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-alerts.html">ALERTS</a></li>
                                                    <li><a href="shortcode-styled-icons.html">STYLED ICONS</a></li>
                                                    <li><a href="shortcode-tables.html">TABLES</a></li>
                                                    <li><a href="shortcode-tabs.html">TABS</a></li>
                                                    <li><a href="shortcode-testimonials.html">TESTIMONIALS</a></li>
                                                    <li><a href="shortcode-thumbnails.html">THUMBNAILS</a></li>
                                                    <li><a href="shortcode-toggles.html">TOGGLES</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>



    <!--
        SLIDER

        .height-300
        .height-350
        .height-400
        .height-450
        .height-500
        .height-550
        .height-600
        .height-650
        .height-700
        .height-750
        .height-800
    -->
    <section class="height-500" id="slider" style="background:url('assets/images/demo/1200x800/11-min.jpg')">
        <div class="overlay dark-6"><!-- dark overlay [0 to 9 opacity] --></div>

        <div class="display-table">
            <div class="display-table-cell vertical-align-middle">

                <div class="container text-center">

                    <h1 class="nomargin wow fadeInUp" data-wow-delay="0.4s">
                        WE ARE
                        <!--
                            TEXT ROTATOR
                            data-animation="fade|flip|flipCube|flipUp|spin"
                        -->
								<span class="rotate " data-animation="fade" data-speed="1500">
									SMARTY, MULTIPURPOSE, POWERFUL
								</span>
                    </h1>

                    <p class="lead font-lato size-30 wow fadeInUp" data-wow-delay="0.7s">
                        Over <span class="countTo" data-speed="4000">550</span> html files!
                        <span class="theme-color weight-400 font-style-italic">Admin included</span> &amp; RTL
                    </p>

                    <a class="btn btn-default btn-lg" href="#">PURCHASE NOW</a>

                </div>

            </div>
        </div>

    </section>
    <!-- /SLIDER -->

    @yield('content')

    <!-- -->
    <section>
        <div class="container">

            <!-- FEATURED BOXES 3 -->
            <div class="row">
                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-circle-compass"></i>
                        <h4>Design</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-piechart"></i>
                        <h4>Analytics</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-strategy"></i>
                        <h4>Development</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-streetsign"></i>
                        <h4>Marketing</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-bargraph"></i>
                        <h4>Statistics</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-trophy"></i>
                        <h4>Winners</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-profile-female"></i>
                        <h4>Clients</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6 margin-bottom-30">
                    <div class="text-center">
                        <i class="ico-light ico-lg ico-rounded ico-hover et-heart"></i>
                        <h4>Favourite</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
                    </div>
                </div>
            </div>
            <!-- /FEATURED BOXES 3 -->

        </div>
    </section>
    <!-- / -->



    <!-- CALLOUT -->
    <div class="alert alternate bordered-bottom nomargin">
        <div class="container">

            <div class="row">

                <div class="col-md-9 col-sm-12"><!-- left text -->
                    <h3><strong>OVER <span class="countTo weight-400" data-speed="3000">8300</span> CLIENTS TRUST OUR SERVICES</strong></h3>
                    <p class="font-lato weight-300 size-20 nomargin-bottom">
                        We truly care about our users and our product.
                    </p>
                </div><!-- /left text -->


                <div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
                    <a href="page-services-1.html" class="btn btn-3d btn-teal btn-lg size-16">OUR SERVICES</a>
                </div><!-- /right btn -->

            </div>

        </div>
    </div>
    <!-- /CALLOUT -->




    <!-- -->
    <section>
        <div class="container">

            <!-- -->
            <article class="row">
                <div class="col-md-6">
                    <!-- OWL SLIDER -->
                    <div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"items": 1, "autoHeight": true, "navigation": true, "pagination": true, "transitionStyle":"backSlide", "progressBar":"true"}'>
                        <div>
                            <img class="img-responsive" src="assets/images/demo/mockups/800x553/3-min.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="assets/images/demo/mockups/800x553/2-min.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="assets/images/demo/mockups/800x553/18-min.jpg" alt="">
                        </div>
                        <div>
                            <img class="img-responsive" src="assets/images/demo/mockups/800x553/17-min.jpg" alt="">
                        </div>
                    </div>
                    <!-- /OWL SLIDER -->
                </div>
                <div class="col-md-6">
                    <h3>Areas of Expertise</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore dolore magnm aliquam quaerat voluptatem.</p>
                    <p>Enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </article>
            <!-- / -->

        </div>
    </section>
    <!-- / -->




    <!-- CALLOUT -->
    <section class="callout-dark heading-title heading-arrow-bottom">
        <div class="container">

            <div class="text-center">
                <h3 class="size-30">Smarty Multipurpose Responsive Template</h3>
                <p>We can't solve problems by using the same kind of thinking we used when we created them.</p>
            </div>

        </div>
    </section>
    <!-- /CALLOUT -->




    <!--
        .box-pink
        .box-blue
        .box-orange
        .box-yellow
        .box-purple
        .box-red
        .box-brown
        .box-green
        .box-black
        .box-gray
        .box-teal
    -->
    <div class="row box-gradient box-teal">
        <div class="col-xs-6 col-sm-3">
            <i class="fa fa-child fa-4x"></i>
            <h2 class="countTo font-raleway" data-speed="3000">8165</h2>
            <p>HAPPY CUSTOMERS</p>
        </div>

        <div class="col-xs-6 col-sm-3">
            <i class="fa fa-smile-o fa-4x"></i>
            <h2 class="countTo font-raleway" data-speed="3000">1033</h2>
            <p>COMPLETED PROJECTS</p>
        </div>

        <div class="col-xs-6 col-sm-3">
            <i class="fa fa-heart fa-4x"></i>
            <h2 class="countTo font-raleway" data-speed="3000">24567</h2>
            <p>MASSAGES</p>
        </div>

        <div class="col-xs-6 col-sm-3">
            <i class="fa fa-female fa-4x"></i>
            <h2 class="countTo font-raleway" data-speed="3000">68</h2>
            <p>MOTHERS TO BE</p>
        </div>
    </div>





    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <!-- toggle -->
                <div class="col-md-4 col-sm-4">
                    <div class="toggle toggle-accordion toggle-transparent toggle-bordered-full">

                        <div class="toggle active">
                            <label>Lorem ipsum dolor.</label>
                            <div class="toggle-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>

                        <div class="toggle">
                            <label>Sit amet, consectetur.</label>
                            <div class="toggle-content">
                                <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
                            </div>
                        </div>

                        <div class="toggle">
                            <label>Consectetur adipiscing elit.</label>
                            <div class="toggle-content">
                                <p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /toggle -->

                <!-- skills -->
                <div class="col-md-4 col-sm-4">
                    <h4>Our Skills</h4>

                    <label>
                        <span class="pull-right">60%</span>
                        MARKETING
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="pull-right">88%</span>
                        SALES
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="pull-right">93%</span>
                        DESIGN
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 93%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="pull-right">77%</span>
                        DEVELOPMENT
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 77%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="pull-right">99%</span>
                        OTHER
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%; min-width: 2em;"></div>
                    </div>

                </div>
                <!-- /skills -->

                <!-- recent news -->
                <div class="col-md-4 col-sm-4">
                    <h4>Recent News</h4>

                    <div class="row tab-post"><!-- post -->
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <a href="blog-sidebar-left.html">
                                <img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                            <small>June 29 2014</small>
                        </div>
                    </div><!-- /post -->

                    <div class="row tab-post"><!-- post -->
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <a href="blog-sidebar-left.html">
                                <img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget</a>
                            <small>June 29 2014</small>
                        </div>
                    </div><!-- /post -->

                    <div class="row tab-post"><!-- post -->
                        <div class="col-md-2 col-sm-2 col-xs-2">
                            <a href="blog-sidebar-left.html">
                                <img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa</a>
                            <small>June 29 2014</small>
                        </div>
                    </div><!-- /post -->

                </div>
                <!-- /recent news -->

            </div>

        </div>
    </section>
    <!-- / -->

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <!-- Footer Logo -->
                    <img class="footer-logo" src="assets/images/logo-footer.png" alt="" />

                    <!-- Small Description -->
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                PO Box 21132<br>
                                Here Weare St, Melbourne<br>
                                Vivas 2355 Australia<br>
                            </li>
                            <li class="footer-sprite phone">
                                Phone: 1-800-565-2390
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:support@yourname.com">support@yourname.com</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>

                <div class="col-md-3">

                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1">LATEST NEWS</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                            <small>29 June 2015</small>
                        </li>
                        <li>
                            <a href="#">Nullam id dolor id nibh ultricies</a>
                            <small>29 June 2015</small>
                        </li>
                        <li>
                            <a href="#">Duis mollis, est non commodo luctus</a>
                            <small>29 June 2015</small>
                        </li>
                    </ul>
                    <!-- /Latest Blog Post -->

                </div>

                <div class="col-md-2">

                    <!-- Links -->
                    <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="#">Our Pricing</a></li>
                        <li><a href="#">Smarty Tour</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <!-- /Links -->

                </div>

                <div class="col-md-4">

                    <!-- Newsletter Form -->
                    <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                    <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

                    <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                        </div>
                    </form>
                    <!-- /Newsletter Form -->

                    <!-- Social Icons -->
                    <div class="margin-top-20">
                        <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>

                    </div>
                    <!-- /Social Icons -->

                </div>

            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <ul class="pull-right nomargin list-inline mobile-block">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li>&bull;</li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                &copy; All Rights Reserved, Company LTD
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
<script type="text/javascript" src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>

<script type="text/javascript" src="assets/js/scripts.js"></script>

<!-- STYLESWITCHER - REMOVE -->
<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>
</body>
</html>
