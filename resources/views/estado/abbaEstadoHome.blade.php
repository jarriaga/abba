@extends('layouts.corporate4.master')
@section('title', 'estado de ')

@section('content')
        <!--
				PAGE HEADER

				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->

<style>
    @media only screen and (max-width: 767px){
     #regionInput{
         position: relative;
         display: block;
         width: 100%!important;
         margin-left: 0px!important;
         margin-top: 0px!important;
     }
    }
    #regionInput{
        margin-left: 200px;
        margin-top: -40px;
        width: 250px;
    }

</style>

<section class="page-header dark page-header-xs">
    <div class="container">

        <h1>{{$estado}}</h1>
        <input id="regionInput" type="text" name="src" placeholder="US State" class="form-control typeahead" />

        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li class="active">Left Sidebar</li>
        </ol><!-- /breadcrumbs -->

    </div>
</section>
<!-- /PAGE HEADER -->


<!-- -->
<section>
    <div class="container">


        <!-- Portfolio Filter -->
        <div class="text-center">
            <ul class="nav nav-pills mix-filter">
                <li data-filter="all" class="filter active"><a href="#">All</a></li>
                <li data-filter="development" class="filter"><a href="#">Development</a></li>
                <li data-filter="photography" class="filter"><a href="#">Photography</a></li>
                <li data-filter="design" class="filter"><a href="#">Design</a></li>
            </ul>
        </div>
        <!-- /Portfolio Filter -->

        <div class="divider divider-dotted"><!-- divider --></div>

        <div class="row">

            <!-- LEFT -->
            <div class="col-md-3 col-sm-3">

                <!-- SIDE NAV -->
                <ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">

                    <li class="list-group-item list-toggle active">   <!-- NOTE: "active" to be open on page load -->
                        <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1">PAGES</a>
                        <ul id="collapse-1" class="collapse in"><!-- NOTE: "collapse in" to be open on page load -->
                            <li><a href="portfolio-layout-fullwidth.html"><i class="fa fa-angle-right"></i> FULL WIDTH</a></li>
                            <li class="active">
                                <span class="badge badge-red">New</span>
                                <a href="portfolio-layout-aside-left.html"><i class="fa fa-angle-right"></i> LEFT SIDEBAR</a>
                            </li>
                            <li><a href="portfolio-layout-aside-right.html"><i class="fa fa-angle-right"></i> RIGHT SIDEBAR</a></li>
                            <li><a href="portfolio-layout-aside-both.html"><i class="fa fa-angle-right"></i> BOTH SIDEBAR</a></li>
                        </ul>
                    </li>

                    <li class="list-group-item"><a href="#">CATEGORY #1</a></li>
                    <li class="list-group-item"><a href="#">CATEGORY #2</a></li>
                    <li class="list-group-item"><a href="#">CATEGORY #3</a></li>

                </ul>
                <!-- /SIDE NAV -->


                <!-- JUSTIFIED TAB -->
                <div class="tabs nomargin-top margin-bottom-60">

                    <!-- tabs -->
                    <ul class="nav nav-tabs nav-bottom-border nav-justified">
                        <li class="active">
                            <a href="#tab_1" data-toggle="tab">
                                Popular
                            </a>
                        </li>
                        <li>
                            <a href="#tab_2" data-toggle="tab">
                                Recent
                            </a>
                        </li>
                    </ul>

                    <!-- tabs content -->
                    <div class="tab-content margin-bottom-60 margin-top-30">

                        <!-- POPULAR -->
                        <div id="tab_1" class="tab-pane active">

                            <div class="row tab-post"><!-- post -->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="blog-sidebar-left.html">
                                        <img src="assets/images/demo/people/300x300/1-min.jpg" width="50" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                                    <small>June 29 2014</small>
                                </div>
                            </div><!-- /post -->

                            <div class="row tab-post"><!-- post -->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="blog-sidebar-left.html">
                                        <img src="assets/images/demo/people/300x300/2-min.jpg" width="50" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
                                    <small>June 29 2014</small>
                                </div>
                            </div><!-- /post -->

                            <div class="row tab-post"><!-- post -->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="blog-sidebar-left.html">
                                        <img src="assets/images/demo/people/300x300/3-min.jpg" width="50" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa, sodales</a>
                                    <small>June 29 2014</small>
                                </div>
                            </div><!-- /post -->

                        </div>
                        <!-- /POPULAR -->


                        <!-- RECENT -->
                        <div id="tab_2" class="tab-pane">

                            <div class="row tab-post"><!-- post -->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="blog-sidebar-left.html">
                                        <img src="assets/images/demo/people/300x300/4-min.jpg" width="50" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget diam</a>
                                    <small>June 29 2014</small>
                                </div>
                            </div><!-- /post -->

                            <div class="row tab-post"><!-- post -->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="blog-sidebar-left.html">
                                        <img src="assets/images/demo/people/300x300/5-min.jpg" width="50" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                                    <small>June 29 2014</small>
                                </div>
                            </div><!-- /post -->

                            <div class="row tab-post"><!-- post -->
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <a href="blog-sidebar-left.html">
                                        <img src="assets/images/demo/people/300x300/6-min.jpg" width="50" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <a href="blog-sidebar-left.html" class="tab-post-link">Quisque ut nulla at nunc</a>
                                    <small>June 29 2014</small>
                                </div>
                            </div><!-- /post -->
                        </div>
                        <!-- /RECENT -->

                    </div>

                </div>
                <!-- JUSTIFIED TAB -->


                <!-- FACEBOOK -->
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fstepofweb&amp;width=263&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" style="border:none; overflow:hidden; width:263px; height:258px;"></iframe>



            </div>

            <!-- RIGHT -->
            <div class="col-md-9 col-sm-9">

                <div id="portfolio" class="portfolio-gutter">

                    <div class="row mix-grid">

                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>

                                    <!-- carousel -->
                                    <div class="owl-carousel buttons-autohide controlls-over nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": false, "pagination": true, "transitionStyle":"fade"}'>
                                        <div>
                                            <img class="img-responsive" src="assets/images/demo/mockups/600x399/8-min.jpg" width="600" height="399" alt="">
                                        </div>
                                        <div>
                                            <img class="img-responsive" src="assets/images/demo/mockups/600x399/9-min.jpg" width="600" height="399" alt="">
                                        </div>
                                        <div>
                                            <img class="img-responsive" src="assets/images/demo/mockups/600x399/10-min.jpg" width="600" height="399" alt="">
                                        </div>
                                    </div>
                                    <!-- /carousel -->

                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix development"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/20-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix photography"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/19-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix development"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix photography"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/17-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/17-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/16-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/16-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix photography"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/1-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/1-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/2-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/2-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->


                        <div class="col-md-4 col-sm-4 mix design"><!-- item -->

                            <div class="item-box">
                                <figure>
												<span class="item-hover">
													<span class="overlay dark-5"></span>
													<span class="inner">

														<!-- lightbox -->
														<a class="ico-rounded lightbox" href="assets/images/demo/mockups/1200x800/3-min.jpg" data-plugin-options='{"type":"image"}'>
                                                            <span class="fa fa-plus size-20"></span>
                                                        </a>

                                                        <!-- details -->
														<a class="ico-rounded" href="portfolio-single-slider.html">
                                                            <span class="glyphicon glyphicon-option-horizontal size-20"></span>
                                                        </a>

													</span>
												</span>
                                    <img class="img-responsive" src="assets/images/demo/mockups/600x399/3-min.jpg" width="600" height="399" alt="">
                                </figure>
                            </div>

                        </div><!-- /item -->

                    </div>


                    <div class="divider divider-dotted"><!-- divider --></div>


                    <div class="text-right">

                        <!-- Pagination Default -->
                        <ul class="pagination pagination-simple">
                            <li><a href="#">prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">next</a></li>
                        </ul>
                        <!-- /Pagination Default -->

                    </div>

                </div>


            </div>

        </div>


    </div>
</section>
<!-- / -->


@endsection

