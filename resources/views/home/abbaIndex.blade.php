@extends('layouts.corporate4.master')
@section('title', 'Inicio')


@section('slider')
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
@endsection


@section('content')

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

@endsection

