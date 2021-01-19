<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <link href="<?php echo base_url().'public/'; ?>special/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Your custom styles (optional) -->
        <link href="<?php echo base_url().'public/'; ?>special/css/style_1.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>assets/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>special/contact.css">

        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>assets/css/font-awesome.min.css">
        <!--linear icon css-->
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">

    </head>

    <body>






        <!--==========================
        Top Bar
      ============================-->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
                <div class="contact-info float-left">

                    <div class="header-top-left">
                        <ul>
                            <li class="select-opt">
                                <select name="language" id="language" style="font-size: 14px;font-family: 'Staatliches', cursive;color: #409cd1;">
                                    <option value="default">ENGLISH</option>
                                    <option value="Bangla">BN</option>
                                    <option value="Arabic">AB</option>
                                </select>
                            </li>

                            <li class="select-opt">
                                <select name="currency" id="currency" style="font-size: 14px;font-family: 'Staatliches', cursive;color: #409cd1;">
                                    <option value="usd">USD</option>
                                    <option value="euro">Euro</option>
                                    <option value="bdt">BDT</option>
                                </select>
                            </li>
                            <li class="select-opt">
                                <a href="#" style="font-size: 14px"><span class="lnr lnr-magnifier"></span></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="social-links float-right">
                    <ul>
                        <li class="head-responsive-right pull-right">
                            <div class="header-top-right">
                                <ul>
                                    <li class="header-top-contact" style="color: #409cd1;font-size: 14px;font-family: 'Staatliches', cursive;">
                                        BEST SELECTION
                                    </li>
                                    <li class="header-top-contact" >
                                        <a href="#" style="color: #409cd1;font-size: 14px;font-family: 'Staatliches', cursive;">BEST PRICE</a>
                                    </li>
                                    <li class="header-top-contact" >
                                        <a href="#" style="color: #409cd1;font-size: 14px;font-family: 'Staatliches', cursive;">TRUSTED PAYMENT</a>
                                    </li>
                                </ul>
                            </div>
                        </li>    
                    </ul>
                </div>
            </div>
        </section>

        <!--==========================
        Header
      ============================-->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <h1><a href="#" class="scrollto">IBZ<span>TOURS</span></a></h1>

                    <!-- <a href="#"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="#body">DESTINATIONS</a></li>
                        <li><a href="#">TRAVEL STYLES</a></li>
                        <li class="menu-has-children"><a href="#">DEALS</a>
                            <ul>
                                <li><a href="#">Drop Down 1</a></li>
                                <li><a href="#">Drop Down 3</a></li>
                                <li><a href="#">Drop Down 4</a></li>
                                <li><a href="#">Drop Down 5</a></li>
                            </ul>
                        </li>                   
                        <li><a href="#">HELP</a></li>

                        <li><a href="#"><img src="<?php echo base_url().'public/'; ?>assets/images/Capture_2.PNG"></a></li>
                        <li><a href="#"><img src="<?php echo base_url().'public/'; ?>assets/images/Capturefd.PNG"></a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header>



















        <!--==========================
          About Us Section
        ============================-->
        <section id="about" class="section-bg">
             <?php
        $sel = $this->Home_model->about_us();
        ?>
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title"><?php echo $sel->title; ?></h3>
                    <span class="section-divider"></span>
                    <p class="section-description" >
                        <?php //echo $sel->title; ?>
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 about-img wow fadeInLeft">
                        <br><br>
                        <img src="<?php echo base_url().'public/'; ?>img/travel.png" alt="">
                    </div>

                    <div class="col-lg-6 content wow fadeInRight">
                        <!--<h5><b>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</b></h5>
                        <h6>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>-->
                        <p style="text-align: justify">
                           <?php echo $sel->description; ?>
                        </p>
                       <!-- <p style="text-align: justify">
                            Curabitur pretium test eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                        </p>-->


                    </div>
                </div>

            </div>
        </section><!-- #about -->

        <!-- About -->

        <section class="about" id="about">
            <div class="container text-center">
                <h2>
                  <?php echo $sel->subtitle; ?>

                </h2>
                <span class="section-dividersecond"></span>
                <p>
                   <?php echo $sel->subdescription; ?>
                    
                </p>

                <div class="row stats-row">
                    <div class="stats-col text-center col-md-3 col-sm-6">
                        <div class="circle">
                            <span class="stats-no" data-toggle="counter-up">232</span> Satisfied Customers
                        </div>
                    </div>

                    <div class="stats-col text-center col-md-3 col-sm-6">
                        <div class="circle">
                            <span class="stats-no" data-toggle="counter-up">79</span> Released Projects
                        </div>
                    </div>

                    <div class="stats-col text-center col-md-3 col-sm-6">
                        <div class="circle">
                            <span class="stats-no" data-toggle="counter-up">1,463</span> Hours Of Support
                        </div>
                    </div>

                    <div class="stats-col text-center col-md-3 col-sm-6">
                        <div class="circle">
                            <span class="stats-no" data-toggle="counter-up">15</span> Hard Workers
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About -->

        <br>
        <footer id="footer"  style="padding-top: 0px">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Tekwalker</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#" style="color: red">Tekwalker</a>
                </div>
            </div>
        </footer>

        <!-- Intro -->
        <!--welcome-hero end -->

        <!--testimonial_client&about-->
        <script src="<?php echo base_url().'public/'; ?>lib/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url().'public/'; ?>lib/superfish/superfish.min.js"></script>
        <script src="<?php echo base_url().'public/'; ?>lib/wow/wow.min.js"></script>
        <script src="<?php echo base_url().'public/'; ?>lib/owlcarousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url().'public/'; ?>lib/sticky/sticky.js"></script>
        <!-- Template Main Javascript File -->
        <script src="<?php echo base_url().'public/'; ?>js/main.js"></script>

    </body>

</html>