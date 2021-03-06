<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title>CBH Booking</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="CBH Booking">
        <meta name="author" content="SoapTheme">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url().'public/'; ?>images/favicon.png" type="image/x-icon">

        <!-- Theme Styles -->
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href="https://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/animate.min.css">

        <!-- Current Page Styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/'; ?>components/revolution_slider/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/'; ?>components/revolution_slider/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/'; ?>components/jquery.bxslider/jquery.bxslider.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'public/'; ?>components/flexslider/flexslider.css" media="screen" />



        <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/style.css">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/updates.css">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/custom.css">

        <!-- Responsive Styles -->
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url().'public/'; ?>css/cbh-design.css">

        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery-2.0.2.min.js"></script>


        <style>
            section#content {  min-height: 450px; padding: 0; position: relative; overflow: hidden; }
            #main { padding-top: 80px; }
            .page-title, .page-description { color: #fff; }
            .page-title { font-size: 4.1667em; font-weight: bold; }
            .page-description { font-size: 2.5em; margin-bottom: 50px; }
            .featured { position: absolute; right: 50px; bottom: 50px; z-index: 9; margin-bottom: 0;  text-align: right; }
            .featured figure a { border: 2px solid #fff; }
            .featured .details { margin-right: 10px; }
            .featured .details > * { color: #fff; line-height: 1.25em; margin: 0; font-weight: bold; text-shadow: 2px -2px rgba(0, 0, 0, 0.2); }

            ul.list-inline.fleft {
                float: left;
                display: -webkit-box;
                padding: 0 10px;
            }

            .hide {
                display: none;
            }
        </style>

    </head>
    <body>

        <div id="page-wrapper">
           <!-- <header id="header" class="navbar-static-top">
                <div class="topnav hidden-xs trans_topbar" style="background:#ffffff70;">
                    <div class="container">
                        <ul class="quick-menu pull-left">
                            <li><a href="#">MY ACCOUNT</a></li>
                            <li class="ribbon">
                                <a href="#">English</a>
                                <ul class="menu mini">
                                    <li><a href="#" title="Dansk">French</a></li>
                                    <li><a href="#" title="Deutsch">Deutsch</a></li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="quick-menu pull-right">
                            <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                            <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                            <li class="ribbon currency">
                                <a href="#" title="">USD</a>
                                <ul class="menu mini">
                                    <li><a href="#" title="AUD">AUD</a></li>
                                    <li><a href="#" title="BRL">BRL</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="main-header trans_mainmenu"style="background:#ffffff70;">

                    <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                        Mobile Menu Toggle
                    </a>

                    <div class="container">
                        <h1 class="logo navbar-brand">
                            <a href="index.html" title="CBH Booking- home">
                                <img src="<?php echo base_url().'public/'; ?>images/logo.png" alt="CBH Booking" />
                            </a>
                        </h1>

                        <nav id="main-menu" role="navigation">
                            <ul class="menu">
                                <li class="menu-item-has-children">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="hotel-index.html">Hotels</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="flight-index.html">Flights</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="car-index.html">Transers</a>

                                </li>

                                <li class="menu-item-has-children">
                                    <a href="extra-pages-hotdeals.html">Hot Deals</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="pages-aboutus1.html">About Us</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="pages-faq2.html">FAQs</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="pages-blog-rightsidebar.html">Blog</a>
                                </li>

                                <li class="menu-item-has-children">
                                    <a href="pages-contactus1.html">Contact Us</a>
                                </li>



                            </ul>
                        </nav>
                    </div>

                    <nav id="mobile-menu-01" class="mobile-menu collapse">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="hotel-index.html">Hotels</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="flight-index.html">Flights</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="car-index.html">Transers</a>

                            </li>

                            <li class="menu-item-has-children">
                                <a href="extra-pages-hotdeals.html">Hot Deals</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="pages-aboutus1.html">About Us</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="pages-faq2.html">FAQs</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="pages-blog-rightsidebar.html">Blog</a>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="pages-contactus1.html">Contact Us</a>
                            </li>



                        </ul>

                    </nav>
                </div>
                <div id="travelo-signup" class="travelo-signup-box travelo-box">
                    <div class="login-social">
                        <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                        <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                    </div>
                    <div class="seperator"><label>OR</label></div>
                    <div class="simple-signup">
                        <div class="text-center signup-email-section">
                            <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                        </div>
                        <p class="description">By signing up, I agree to CBH Booking's Terms of Service, Privacy Policy, Guest Refund policy, and Host Guarantee Terms.</p>
                    </div>
                    <div class="email-signup">
                        <form>
                            <div class="form-group">
                                <input type="text" class="input-text full-width" placeholder="first name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-text full-width" placeholder="last name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-text full-width" placeholder="email address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="input-text full-width" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="input-text full-width" placeholder="confirm password">
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Tell me about CBH Booking news
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="description">By signing up, I agree to CBH Booking's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                            </div>
                            <button type="submit" class="full-width btn-medium">SIGNUP</button>
                        </form>
                    </div>
                    <div class="seperator"></div>
                    <p>Already a CBH Booking member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
                </div>
                <div id="travelo-login" class="travelo-login-box travelo-box">
                    <div class="login-social">
                        <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                        <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                    </div>
                    <div class="seperator"><label>OR</label></div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <a href="#" class="forgot-password pull-right">Forgot password?</a>
                            <div class="checkbox checkbox-inline">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </form>
                    <div class="seperator"></div>
                    <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
                </div>
            </header> -->
            <?php $this->view('header'); ?>
            <section id="content" class="slideshow-bg">
                <div id="slideshow">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slidebg" style="background-image: url('<?php echo base_url().'public/'; ?>images/d2.jpeg');"></div>
                            </li>
                            <li>
                                <div class="slidebg" style="background-image: url('<?php echo base_url().'public/'; ?>images/d1.jpg');"></div>
                            </li>
                            <li>
                                <div class="slidebg" style="background-image: url('<?php echo base_url().'public/'; ?>images/d2.jpg');"></div>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="container">
                    <div id="main"style=" margin: 50px 0;">
                        <div class="col-sm-9">
                            <div class="search-box-wrapper style2">
                                <div class="search-box">
                                    <ul class="search-tabs clearfix">
                                        <li class="active"><a href="#hotels-tab" data-toggle="tab"><i class="soap-icon-hotel"></i><span>HOTELS</span></a></li>
                                        <li><a href="#flights-tab" data-toggle="tab"><i class="soap-icon-plane-right takeoff-effect"></i><span>FLIGHTS</span></a></li>
                                        <li><a href="#hotelsflight-tab" data-toggle="tab"><i class="soap-icon-car"></i><span>HOTELS + FLIGHT</span></a></li>
                                        <li><a href="#cars-tab" data-toggle="tab"><i class="soap-icon-car"></i><span>TRANSFERS</span></a></li>

                                    </ul>
                                    <div class="visible-mobile">
                                        <ul id="mobile-search-tabs" class="search-tabs clearfix">
                                            <li class="active"><a href="#hotels-tab">HOTELS</a></li>
                                            <li><a href="#flights-tab">FLIGHTS</a></li>
                                            <li><a href="#hotelsflight-tab">HOTELS + FLIGHT</a></li>
                                            <li><a href="#cars-tab">TRANSFERS</a></li>

                                        </ul>
                                    </div>





                                    <div class="search-tab-content">
                                        <div class="tab-pane fade active in" id="hotels-tab">
                                        <form action="<?php echo base_url();?>/hotels/hotel_search_results" method="post" id="hotelsearch_form">
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    
                                                    <div class="form-group col-sm-6 col-md-3 col-lg-6">
                                                        <label for="exampleInputEmail1">Location</label>
                                                        <input type="text" name="city" id="city" class="input-text full-width" placeholder="Rome, Paris, New York..." />
                                                    </div>
                                                    <div class="form-group col-sm-6 col-md-4 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <label for="exampleInputEmail1">Check In</label>
                                                                <div class="datepicker-wrap">
                                                                     
                                                                    <input type="text" name="org_cin" id="check_in" class="input-text full-width" placeholder="Check In" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                 <label for="exampleInputEmail1">Check Out</label>
                                                              <div class="datepicker-wrap">
                                                                    
                                                                    <div id="hotel_out"><input type="text" name="org_cout" id="check_out" class="input-text full-width" placeholder="Check Out" /></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-5 col-lg-6">
                                                        <div class="row">
                                                            
                                                            
                                                             
                                                            <!--New Code-->

                                                            <div class="col-xs-12 col-sm-8 col-md-4 pad-right">
                                                                <div class="form-yossi">
                                                                    <i class="yossi-profile" aria-hidden="true"></i>
                                                                    <label for="exampleInputEmail1">Guest</label>
                                                                    <input class="form-control guests custom-inputbox styledSelect" type="text" id="guests" value="2 Guests" placeholder="Guests">
                                                                    <div class="addguest" style="display: none;">
                                                                        <div class="rooms">
                                                                            <div class="row">
                                                                                <div class="col-8 col-sm-7 col-md-7">
                                                                                    <label>Select No. of Room</label>
                                                                                </div>
                                                                                <div class="col-4 col-sm-5 col-md-5">
                                                                                    <select class="yi-select noOfRoomsSel form-control" name="room_count">
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row room-container" data-value="0" id="room1">

                                                                            <div class="col-12 col-sm-3 col-md-3 pad-right">
                                                                                <label class="roomTitl">Room<elm class="roomCount">1</elm>  :</label>
                                                                            </div>
                                                                            <div class="col-12 col-sm-9 col-md-9">
                                                                                <div class="adult">
                                                                                    <div class="inner-field">
                                                                                        <span class="inner-titles">Adult</span>&nbsp;&nbsp;<label class="guestTitl"><small>(12+ yrs)</small></label>
                                                                                        <div>
                                                                                            <ul class="pagination" id="adult_count1" name="adult[]">
                                                                                                <input type="hidden" name="adult[]" id="adult_count11" value="2">
                                                                                                <li id="1">1</li>
                                                                                                <li class="active" id="2">2</li>
                                                                                                <li id="3">3</li>
                                                                                                <li id="4">4</li>
                                                                                                <li id="5">5</li>
                                                                                                <li id="6">6</li>

                                                                                            </ul>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                                <div class="child">
                                                                                    <div class="inner-field">
                                                                                        <span class="inner-titles">Children</span>&nbsp;&nbsp;<label class="guestTitl"><small>(2-12 yrs)</small></label>

                                                                                        <div>
                                                                                            <ul class="pagination room-child" id="child_count1" name="child[]">
                                                                                                <input type="hidden" name="child[]" id="child_count11" value="0">
                                                                                                <li class="active" id="0">0</li>
                                                                                                <li id="1">1</li>
                                                                                                <li id="2">2</li>

                                                                                            </ul>
                                                                                        </div>

                                                                                    </div>

                                                                                </div>
                                                                            </div>

                                                                            <div class="clearfix"></div>
                                                                            <div class="specifyAge room1-head" style="display:none">
                                                                                <div class="row">
                                                                                    <div class="col-sm-3 col-md-3"></div>
                                                                                    <div class="col-sm-9 col-md-9">
                                                                                        <span class="inner-titles">Specify Children ages</span>&nbsp;&nbsp;<label class="guestTitl" style="padding-left:0px;"><small>(2-12 yrs)</small></label>

                                                                                        <div class="specifyChildrenAges">
                                                                                            <div class="row">
                                                                                                <div class="col-6 col-sm-5 col-md-5 childAge room1_child1" style="display:none">
                                                                                                    <div class="inner-field">
                                                                                                        <select class="yi-select cAgeSelected form-control" name="child_age[0][]">
                                                                                                            <option value="2">2</option>
                                                                                                            <option value="3">3</option>
                                                                                                            <option value="4">4</option>
                                                                                                            <option value="5">5</option>
                                                                                                            <option value="6">6</option>
                                                                                                            <option value="7">7</option>
                                                                                                            <option value="8">8</option>
                                                                                                            <option value="9">9</option>
                                                                                                            <option value="10">10</option>
                                                                                                            <option value="11">11</option>
                                                                                                            <option value="12">12</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6 col-sm-5 col-md-5 childAge room1_child2" style="display:none">
                                                                                                    <div class="inner-field">
                                                                                                        <select class="yi-select cAgeSelected form-control" name="child_age[0][]">
                                                                                                            <option value="2">2</option>
                                                                                                            <option value="3">3</option>
                                                                                                            <option value="4">4</option>
                                                                                                            <option value="5">5</option>
                                                                                                            <option value="6">6</option>
                                                                                                            <option value="7">7</option>
                                                                                                            <option value="8">8</option>
                                                                                                            <option value="9">9</option>
                                                                                                            <option value="10">10</option>
                                                                                                            <option value="11">11</option>
                                                                                                            <option value="12">12</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                        <div class="showRooms">
                                                                            <div class="row room-container" data-value="2" style="display:none" id="room2">
                                                                                <div class="col-12 col-sm-3 col-md-3 pad-right">
                                                                                    <label class="roomTitl"> Room <em class="roomCount">2</em> : </label>
                                                                                </div>
                                                                                <div class="col-12 col-sm-9 col-md-9">
                                                                                    <div class="adult">
                                                                                        <div class="inner-field">
                                                                                            <span class="inner-titles">Adult</span>
                                                                                            &nbsp;&nbsp;<label class="guestTitl"><small>(12+ yrs)</small></label>
                                                                                            <div>
                                                                                                <ul class="pagination" id="adult_count2">
                                                                                                    <input type="hidden" name="adult[]" id="adult_count22" value="0">
                                                                                                    <li class="active" id="0" style="display:none">0</li>
                                                                                                    <li id="1">1</li>
                                                                                                    <li id="2">2</li>
                                                                                                    <li id="3">3</li>
                                                                                                    <li id="4">4</li>
                                                                                                    <li id="5">5</li>
                                                                                                    <li id="6">6</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="child">
                                                                                        <div class="inner-field">
                                                                                            <span class="inner-titles">Children</span>
                                                                                            &nbsp;&nbsp;<label class="guestTitl"><small>(2-12 yrs)</small></label>
                                                                                            <div>
                                                                                                <ul class="pagination room-child" id="child_count2">
                                                                                                    <input type="hidden" name="child[]" id="child_count22" value="0">
                                                                                                    <li class="active" id="0">0</li>
                                                                                                    <li id="1">1</li>
                                                                                                    <li id="2">2</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="specifyAge room2-head" style="display:none">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-3 col-md-3"></div>
                                                                                        <div class="col-sm-9 col-md-9">
                                                                                            <span class="inner-titles">Specify Children ages</span>&nbsp;&nbsp;<label class="guestTitl" style="padding-left:0px;"><small>(2-12 yrs)</small></label>
                                                                                            <div class="specifyChildrenAges">
                                                                                                <div class="row">
                                                                                                    <div class="col-6 col-sm-5 col-md-5 childAge room2_child1" style="display:none">
                                                                                                        <div class="inner-field">
                                                                                                            <select class="yi-select cAgeSelected form-control" name="child_age[1][]">
                                                                                                                <option value="2">2</option>
                                                                                                                <option value="3">3</option>
                                                                                                                <option value="4">4</option>
                                                                                                                <option value="5">5</option>
                                                                                                                <option value="6">6</option>
                                                                                                                <option value="7">7</option>
                                                                                                                <option value="8">8</option>
                                                                                                                <option value="9">9</option>
                                                                                                                <option value="10">10</option>
                                                                                                                <option value="11">11</option>
                                                                                                                <option value="12">12</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6 col-sm-5 col-md-5 childAge room2_child2" style="display:none">
                                                                                                        <div class="inner-field">
                                                                                                            <select class="yi-select cAgeSelected form-control" name="child_age[1][]">
                                                                                                                <option value="2">2</option>
                                                                                                                <option value="3">3</option>
                                                                                                                <option value="4">4</option>
                                                                                                                <option value="5">5</option>
                                                                                                                <option value="6">6</option>
                                                                                                                <option value="7">7</option>
                                                                                                                <option value="8">8</option>
                                                                                                                <option value="9">9</option>
                                                                                                                <option value="10">10</option>
                                                                                                                <option value="11">11</option>
                                                                                                                <option value="12">12</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="clearfix"></div>

                                                                            </div>
                                                                            <div class="clearfix"></div>
                                                                            <div class="row room-container" data-value="2" style="display:none" id="room3">
                                                                                <div class="col-12 col-sm-3 col-md-3 pad-right">
                                                                                    <label class="roomTitl"> Room <em class="roomCount">3</em> : </label>
                                                                                </div>
                                                                                <div class="col-12 col-sm-9 col-md-9">
                                                                                    <div class="adult">
                                                                                        <div class="inner-field">
                                                                                            <span class="inner-titles">Adult</span>
                                                                                            &nbsp;&nbsp;<label class="guestTitl"><small>(12+ yrs)</small></label>
                                                                                            <div>
                                                                                                <ul class="pagination" id="adult_count3">
                                                                                                    <input type="hidden" name="adult[]" id="adult_count33" value="0">
                                                                                                    <li class="active" id="0" style="display:none">0</li>
                                                                                                    <li id="1">1</li>
                                                                                                    <li id="2">2</li>
                                                                                                    <li id="3">3</li>
                                                                                                    <li id="4">4</li>
                                                                                                    <li id="5">5</li>
                                                                                                    <li id="6">6</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="child">
                                                                                        <div class="inner-field">
                                                                                            <span class="inner-titles">Children</span>
                                                                                            &nbsp;&nbsp;<label class="guestTitl"><small>(2-12 yrs)</small></label>
                                                                                            <div>
                                                                                                <ul class="pagination room-child" id="child_count3">
                                                                                                    <input type="hidden" name="child[]" id="child_count33" value="0">
                                                                                                    <li class="active" id="0">0</li>
                                                                                                    <li id="1">1</li>
                                                                                                    <li id="2">2</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                                <div class="specifyAge room3-head" style="display:none">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-3 col-md-3"></div>
                                                                                        <div class="col-sm-9 col-md-9">
                                                                                            <span class="inner-titles">Specify Children ages</span>&nbsp;&nbsp;<label class="guestTitl" style="padding-left:0px;"><small>(2-12 yrs)</small></label>
                                                                                            <div class="specifyChildrenAges">
                                                                                                <div class="row">
                                                                                                    <div class="col-6 col-sm-5 col-md-5 childAge room3_child1" style="display:none">
                                                                                                        <div class="inner-field">
                                                                                                            <select class="yi-select cAgeSelected form-control" name="child_age[2][]">
                                                                                                                <option value="2">2</option>
                                                                                                                <option value="3">3</option>
                                                                                                                <option value="4">4</option>
                                                                                                                <option value="5">5</option>
                                                                                                                <option value="6">6</option>
                                                                                                                <option value="7">7</option>
                                                                                                                <option value="8">8</option>
                                                                                                                <option value="9">9</option>
                                                                                                                <option value="10">10</option>
                                                                                                                <option value="11">11</option>
                                                                                                                <option value="12">12</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6 col-sm-5 col-md-5 childAge room3_child2" style="display:none">
                                                                                                        <div class="inner-field">
                                                                                                            <select class="yi-select cAgeSelected form-control" name="child_age[2][]">
                                                                                                                <option value="2">2</option>
                                                                                                                <option value="3">3</option>
                                                                                                                <option value="4">4</option>
                                                                                                                <option value="5">5</option>
                                                                                                                <option value="6">6</option>
                                                                                                                <option value="7">7</option>
                                                                                                                <option value="8">8</option>
                                                                                                                <option value="9">9</option>
                                                                                                                <option value="10">10</option>
                                                                                                                <option value="11">11</option>
                                                                                                                <option value="12">12</option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="clearfix"></div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="hidden-xs col-sm-6 col-md-6"></div>
                                                                            <div class="btn-done col-12 col-sm-6 col-md-6">
                                                                                <span><i class="fa fa-check" aria-hidden="true"></i>Done</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <!--New Code-->

                                                            <div class="col-xs-4">
                                                                <br>
                                                                <button type="submit" class="full-width">SEARCH NOW</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="flights-tab">
                                        <form action="<?php echo base_url().'flight/search' ?>" method="post">
                                                <h4 class="title">Where do you want to go?</h4>
                                                <span id="errmsg" style='color:red'></span>
                                                        <div class="row">
                                                            <ul class="list-inline fleft">
                                                            <div class="form-check-inline">
                                                        <label class="form-check-label" for="radio1">
                                                            <input type="radio" class="form-check-input" id="radio1" name="search_type" value="2" checked style="margin-right:5px">Round Trip
                                                        </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                        <label class="form-check-label" for="radio2">
                                                            <input type="radio" class="form-check-input" id="radio2" name="search_type" value="1" style="margin-left:5px; margin-right:5px">One Way
                                                        </label>
                                                        </div>
                                                       <!-- <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option1" style="margin-left:5px; margin-right:5px">Multi Leg
                                                            </label>
                                                        </div> -->
                                                    </ul>    

                                                </div>

                                                <div class="row">
                                                  
                                                    <div class="form-group col-sm-6 col-md-6">
                                                        <input id="origin" name="origin" autocomplete="off" required="" type="text" class="input-text full-width" placeholder="From Airport">
                                                    </div>
                                                    <input type="hidden" name="origin1" >
                                                    <div class="form-group col-sm-6 col-md-6">
                                                        <input id="destination" name="destination" autocomplete="off" required="" type="text" class="input-text full-width" placeholder="To Airport">
                                                    </div>
                                                    <input type="hidden" name="destination1" >
                                                </div>

                                                <div class="row">
                                                <div class="col-xs-6 col-md-6">
                                                <div class="datepicker-wrap">
                                                    <input id="departure_date" type="text" name="departure_date" class="input-text full-width" placeholder="Departure date" autocomplete="off" />
                                                </div>
                                                </div>
                                                <div class="col-xs-6 col-md-6 desc">
                                                    <div class="datepicker-wrap" id="return_date_div">
                                                        <span id="flight_out"><input class="input-text full-width validate[required]" data-errormessage-value-missing="Enter Return Date" placeholder="Return Date" id="return_date" name="return_date" autocomplete="off" type="text"></span>
                                                    </div>
                                                </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value=""> (-/+ 3 days)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" name="direct_flight" value="1"> Direct Flights Only</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <h2>Passangers</h2>
                                                    <div class="col-md-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Adult</li>
                                                            <li class="list-inline-item">
                                                                <div class="input-group1 mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="minus-btn" style="display:none"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="number" name="adult_count" id="adult_count" class="form-control form-control-sm" value="1" min="1">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="plus-btn" style="display:none"><i class="fa fa-plus" style="display:none"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Child (2-12)</li>
                                                            <li class="list-inline-item">
                                                                <div class="input-group1 mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="minus-btn" style="display:none"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="number" name="child_count" id="child_count" class="form-control form-control-sm" value="0" min="0">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="plus-btn" style="display:none"><i class="fa fa-plus" style="display:none"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Infant (0-2)</li>
                                                            <li class="list-inline-item">
                                                                <div class="input-group1 mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="minus-btn" style="display:none"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="number" name="infant_count" id="infant_count" class="form-control form-control-sm" value="0" min="0">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="plus-btn" style="display:none"><i class="fa fa-plus" style="display:none"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <BR><button type="submit" id="flight_search" class="full-width">SEARCH NOW</button>
                                                    </div>
                                                    <script>
                                                      /*  $(document).ready(function () {
                                                            $('#qty_input').prop('disabled', true);
                                                            $('#plus-btn').click(function () {
                                                                $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
                                                            });
                                                            $('#minus-btn').click(function () {
                                                                $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
                                                                if ($('#qty_input').val() == 0) {
                                                                    $('#qty_input').val(1);
                                                                }

                                                            });
                                                        });*/
                                                    </script>
                                                </div>



                                                <div class="row"style="display:none">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Leaving From (city, distirct or specific airpot)" />
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Going To (city, distirct or specific airpot)" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="datepicker-wrap">
                                                            <input type="text" name="date_from" class="input-text full-width" placeholder="Departure Date" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="datepicker-wrap">
                                                            <input type="text" name="date_to" class="input-text full-width" placeholder="Return Date" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="selector">
                                                            <select class="full-width">
                                                                <option value="">Adults</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="">Kids</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="selector">
                                                            <select class="full-width">
                                                                <option value="">Infants</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-xs-6 pull-right">
                                                            <button class="full-width">SEARCH NOW</button>
                                                        </div>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>

                                        <!-----------------hotels-------------------->

                                        <div class="tab-pane fade" id="hotelsflight-tab">
                                            <form action="hotel-flight.html" method="post">
                                                <h4 class="title">Where do you want to go?</h4>

                                                <div class="row">
                                                    <ul class="list-inline fleft">
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label" for="radio1">
                                                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked style="margin-right:5px">Round Trip
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label" for="radio2">
                                                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option1" style="margin-left:5px; margin-right:5px">One Way
                                                            </label>
                                                        </div>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option1" style="margin-left:5px; margin-right:5px">Multi Leg
                                                            </label>
                                                        </div>
                                                    </ul>    

                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-sm-6 col-md-6">
                                                        <input type="text" class="input-text full-width" placeholder="Airport or City...">
                                                    </div>
                                                    <div class="form-group col-sm-6 col-md-6">
                                                        <input type="text" class="input-text full-width" placeholder="Airport or City...">
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-6 col-md-6">
                                                        <div class="datepicker-wrap">
                                                            <input type="date" name="date_from" class="input-text full-width hasDatepicker" placeholder="Departure Date" id="dp1555403907821"><img class="ui-datepicker-trigger" src="<?php echo base_url().'public/'; ?>images/icon/blank.png" alt="" title="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-md-6 desc">
                                                        <div class="datepicker-wrap">
                                                            <input type="date" name="date_from" class="input-text full-width hasDatepicker" placeholder="Return Date" id="return_date"><img class="ui-datepicker-trigger" src="<?php echo base_url().'public/'; ?>images/icon/blank.png" alt="" title="">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value=""> (-/+ 3 days)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="checkbox">
                                                            <label><input type="checkbox" value=""> Direct Flights Only</label>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <h2>Passangers</h2>
                                                    <div class="col-md-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Adult</li>
                                                            <li class="list-inline-item">
                                                                <div class="input-group1 mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="minus-btn" style="display:none"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="plus-btn" style="display:none"><i class="fa fa-plus" style="display:none"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Child (2-12)</li>
                                                            <li class="list-inline-item">
                                                                <div class="input-group1 mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="minus-btn" style="display:none"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="number" id="qty_input" class="form-control form-control-sm" value="0" min="1">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="plus-btn" style="display:none"><i class="fa fa-plus" style="display:none"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">Infant (0-2)</li>
                                                            <li class="list-inline-item">
                                                                <div class="input-group1 mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="minus-btn" style="display:none"><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                    <input type="number" id="qty_input" class="form-control form-control-sm" value="0" min="1">
                                                                    <div class="input-group-prepend">
                                                                        <button class="btn btn-dark btn-sm" id="plus-btn" style="display:none"><i class="fa fa-plus" style="display:none"></i></button>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <button type="submit" class="full-width">SEARCH NOW</button>
                                                    </div>
                                                    <script>
                                                     /*   $(document).ready(function () {
                                                            $('#qty_input').prop('disabled', true);
                                                            $('#plus-btn').click(function () {
                                                                $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
                                                            });
                                                            $('#minus-btn').click(function () {
                                                                $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
                                                                if ($('#qty_input').val() == 0) {
                                                                    $('#qty_input').val(1);
                                                                }

                                                            });
                                                        });*/
                                                    </script>
                                                </div>



                                                <div class="row"style="display:none">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Leaving From (city, distirct or specific airpot)" />
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3">

                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Going To (city, distirct or specific airpot)" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="datepicker-wrap">
                                                            <input type="text" name="date_from" class="input-text full-width" placeholder="Departure Date" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="datepicker-wrap">
                                                            <input type="text" name="date_to" class="input-text full-width" placeholder="Return Date" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="selector">
                                                            <select class="full-width">
                                                                <option value="">Adults</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="selector">
                                                        <select class="full-width">
                                                            <option value="">Kids</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="selector">
                                                            <select class="full-width">
                                                                <option value="">Infants</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">

                                                        <div class="col-xs-6 pull-right">
                                                            <button class="full-width">SEARCH NOW</button>
                                                        </div>
                                                    </div>


                                                </div>
                                            </form>
                                        </div>


                                        <!------------------hotelsflight tab---------------->

                                        <div class="tab-pane fade" id="flight-and-hotel-tab">
                                            <form action="hotel-flight.html" method="post">
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Leaving From (city, distirct or specific airpot)" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Going To (city, distirct or specific airpot)" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" name="date_from" class="input-text full-width" placeholder="Departing On" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="1">anytime</option>
                                                                        <option value="2">morning</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" name="date_to" class="input-text full-width" placeholder="Arriving On" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="1">anytime</option>
                                                                        <option value="2">morning</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Adults</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Kids</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Promo Code" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Infants</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 pull-right">
                                                                <button class="full-width">SEARCH NOW</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="cars-tab">
                                            <form action="car-list-view.html" method="post">
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Pick Up (city, distirct or specific airpot)" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Drop Off (city, distirct or specific airpot)" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <div class="datepicker-wrap">
                                                                        <input type="text" name="date_from" class="input-text full-width" placeholder="Pick-Up Date / Time" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="selector">
                                                                        <select class="full-width">
                                                                            <option value="1">anytime</option>
                                                                            <option value="2">morning</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <div class="datepicker-wrap">
                                                                        <input type="text" name="date_to" class="input-text full-width" placeholder="Drop-Off Date / Time" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <div class="selector">
                                                                        <select class="full-width">
                                                                            <option value="1">anytime</option>
                                                                            <option value="2">morning</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Adults</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Kids</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Promo Code" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">select a car type</option>
                                                                        <option value="economy">Economy</option>
                                                                        <option value="compact">Compact</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <button class="full-width">SEARCH NOW</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="cruises-tab">
                                            <form action="cruise-list-view.html" method="post">
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="enter a destination or hotel name" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" class="input-text full-width" placeholder="Departure Date" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">select cruise length</option>
                                                                        <option value="1">1-2 Nights</option>
                                                                        <option value="2">3-4 Nights</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">select cruise line</option>
                                                                        <option>Azamara Club Cruises</option>
                                                                        <option>Carnival Cruise Lines</option>
                                                                        <option>Celebrity Cruises</option>
                                                                        <option>Costa Cruise Lines</option>
                                                                        <option>Cruise &amp; Maritime Voyages</option>
                                                                        <option>Crystal Cruises</option>
                                                                        <option>Cunard Line Ltd.</option>
                                                                        <option>Disney Cruise Line</option>
                                                                        <option>Holland America Line</option>
                                                                        <option>Hurtigruten Cruise Line</option>
                                                                        <option>MSC Cruises</option>
                                                                        <option>Norwegian Cruise Line</option>
                                                                        <option>Oceania Cruises</option>
                                                                        <option>Orion Expedition Cruises</option>
                                                                        <option>P&amp;O Cruises</option>
                                                                        <option>Paul Gauguin Cruises</option>
                                                                        <option>Peter Deilmann Cruises</option>
                                                                        <option>Princess Cruises</option>
                                                                        <option>Regent Seven Seas Cruises</option>
                                                                        <option>Royal Caribbean International</option>
                                                                        <option>Seabourn Cruise Line</option>
                                                                        <option>Silversea Cruises</option>
                                                                        <option>Star Clippers</option>
                                                                        <option>Swan Hellenic Cruises</option>
                                                                        <option>Thomson Cruises</option>
                                                                        <option>Viking River Cruises</option>
                                                                        <option>Windstar Cruises</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <button class="full-width">SEARCH NOW</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="flight-status-tab">
                                            <form action="flight-list-view.html" method="post">
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Leaving From (enter a city or place name)" />
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Going To (enter a city or place name)" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-md-2">
                                                        <div class="form-group">
                                                            <div class="datepicker-wrap">
                                                                <input type="text" class="input-text full-width" placeholder="Departure Date" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Flight Number" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <button class="full-width">SEARCH NOW</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="online-checkin-tab">
                                            <form>
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Leaving From (enter a city or place name)" />
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Going To (enter a city or place name)" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-md-2">
                                                        <div class="form-group">
                                                            <div class="datepicker-wrap">
                                                                <input type="text" class="input-text full-width" placeholder="Departure Date" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-md-2">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="enter your full name" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <button class="full-width">SEARCH NOW</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="advanced-search-tab">
                                            <form>
                                                <h4 class="title">Where do you want to go?</h4>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Leaving From (city, distirct or specific airpot)" />
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="input-text full-width" placeholder="Going To (city, distirct or specific airpot)" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" class="input-text full-width" placeholder="Departing On" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="1">anytime</option>
                                                                        <option value="2">morning</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xs-6">
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" class="input-text full-width" placeholder="Arriving On" />
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="1">anytime</option>
                                                                        <option value="2">morning</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Adults</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Kids</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6">
                                                                <input type="text" class="input-text full-width" placeholder="Promo Code" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-xs-3">
                                                                <div class="selector">
                                                                    <select class="full-width">
                                                                        <option value="">Infants</option>
                                                                        <option value="1">01</option>
                                                                        <option value="2">02</option>
                                                                        <option value="3">03</option>
                                                                        <option value="4">04</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-6 pull-right">
                                                                <button class="full-width">SERACH NOW</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="#"><img src="<?php echo base_url().'public/'; ?>images/w3.png" alt="Smiley face" height="auto" width="100%"></a>   


                        </div>
                    </div>
                </div>

            </section>


            <div class="container section">
                <h2>Best Flight Offers</h2>
                <div class="row image-box listing-style1 flight">
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="<?php echo base_url().'public/'; ?>images/a1.jpg"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="<?php echo base_url().'public/'; ?>images/a1.jpg"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="<?php echo base_url().'public/'; ?>images/a1.jpg"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown">
                                <span><img alt="" src="<?php echo base_url().'public/'; ?>images/a1.jpg"></span>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/person</small>$620</span>
                                <h4 class="box-title">Paris<small>Oneway flight</small></h4>
                                <div class="time">
                                    <div class="take-off">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">Take off</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                    <div class="landing">
                                        <div class="icon"><i class="soap-icon-plane-right yellow-color"></i></div>
                                        <div>
                                            <span class="skin-color">landing</span><br>Wed Nov 13<br>7:50 Am
                                        </div>
                                    </div>
                                </div>
                                <p class="duration fourty-space"><span class="skin-color">Total Time</span> 13 Hour, 40 minutes</p>
                                <div class="action">
                                    <a class="button btn-small full-width" href="flight-detailed.html">SELECT NOW</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>




            <div class="container section">
                <h2>Featured Holiday Activities</h2>
                <div class="row image-box style5">
                    <div class="col-sm-4">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
                                <a title="" href="#"><img width="370" height="160" alt="" src="<?php echo base_url().'public/'; ?>images/a2.png"></a>
                                <figcaption>
                                    <h3 class="caption-title">Singapore</h3>
                                    <span>3 activities</span>
                                </figcaption>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$30</span>
                                    <h4 class="box-title"><a href="#">Jurong Bird Park Admission</a></h4>
                                </div>
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$120</span>
                                    <h4 class="box-title"><a href="#">Night Safari Adventure</a></h4>
                                </div>
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$360</span>
                                    <h4 class="box-title"><a href="#">Jungle Breakfast with Wildlife</a></h4>
                                </div>
                            </div>

                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0.3">
                                <a title="" href="#"><img width="370" height="160" alt="" src="<?php echo base_url().'public/'; ?>images/a4.jpg"></a>
                                <figcaption>
                                    <h3 class="caption-title">Bangkok</h3>
                                    <span>3 activities</span>
                                </figcaption>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$122</span>
                                    <h4 class="box-title"><a href="#">Day Trip to Safari World</a></h4>
                                </div>
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$46</span>
                                    <h4 class="box-title"><a href="#">Bangkok Cabaret Show by Night</a></h4>
                                </div>
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$259</span>
                                    <h4 class="box-title"><a href="#">Day Trip to Safari World</a></h4>
                                </div>
                            </div>

                        </article>
                    </div>
                    <div class="col-sm-4">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0.6">
                                <a title="" href="#"><img width="370" height="160" alt="" src="<?php echo base_url().'public/'; ?>images/a3.jpg"></a>
                                <figcaption>
                                    <h3 class="caption-title">HongKong</h3>
                                    <span>3 activities</span>
                                </figcaption>
                            </figure>
                            <div class="details">
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$376</span>
                                    <h4 class="box-title"><a href="#">Half-Day Island Tour</a></h4>
                                </div>
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$288</span>
                                    <h4 class="box-title"><a href="#">Ocean Park Tour</a></h4>
                                </div>
                                <div class="detail">
                                    <span class="price"><small>FROM</small>$59</span>
                                    <h4 class="box-title"><a href="#">Lantau Island Sightseeing Tour</a></h4>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>

            <div class="global-map-area bg_count section parallax" data-stellar-background-ratio="0.5" style="background-position: 50% 100.5px; padding: 50px 0px;margin-bottom:40px">
                <div class="container description">
                    <div class="text-center">
                        <h2>QUELQUES <span style="color:#CB0000">BONNES</span> RAISONS<em>you!</em></h2>
                        <p class="text-center">Voici pourquoi tant de gens nous font confiance pour leurs vacances ... Et vous devriez</p>
                    </div>
                    <br>
                    <div class="row">
                        <div class="block clearfix">
                            <div class='col-sm-6 col-md-4'>
                                <div class="icon-box style3 counters-box border_box">
                                    <div class="numbers c_number"style="font-size: 4em;color:white">
                                        <!--<i class="soap-icon-places select-color"></i>-->
                                        <i class="fa fa-globe" aria-hidden="true"style="margin-bottom: 20px;"></i><br>
                                        <span style="font-size: 23px;color: red;font-weight: bold;margin-right:3px">+</span><span class="display-counter" data-value="+200"style="font-size: 23px;color: red;font-weight: bold;">0</span><span style="font-size:20px;margin-left: 5px;">Pays</span>
                                    </div>
                                    <div class="description pays"style="margin-bottom:20px"><!--<span class="count-tesxt">Pays</span>-->Nous recherchons et comparons les prix des hôtels dans plus de 200 pays, dès que ça sera garantie, nous vous trouverons le séjour parfait!!</div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-md-4'>
                                <div class="icon-box style3 counters-box border_box">
                                    <div class="numbers c_number"style="font-size: 4em;color:white">
                                        <!--<i class="soap-icon-places select-color"></i>-->
                                        <i class="fa fa-users" aria-hidden="true"style="margin-bottom: 20px;"></i><br>
                                        <span style="font-size: 23px;color: red;font-weight: bold;margin-right:3px">+</span><span class="display-counter" data-value="+10000"style="font-size: 23px;color: red;font-weight: bold;">0</span>
                                        <span style="font-size:20px;margin-left: 5px;">Clients</span>
                                    </div>
                                    <div class="description pays"style="margin-bottom:20px"><!--<span class="count-tesxt">Pays</span>-->Des milliers de voyageurs dans plus de vingt pays nous ont fait confiance pour trouver la meilleure offre d'hôtels l'année dernière</div>
                                </div>
                            </div>
                            <div class='col-sm-6 col-md-4'>
                                <div class="icon-box style3 counters-box border_box">
                                    <div class="numbers c_number"style="font-size: 4em;color:white">
                                        <!--<i class="soap-icon-places select-color"></i>-->
                                        <i class="fa fa-user" aria-hidden="true"style="margin-bottom: 20px;"></i><br>
                                        <span class="display-counter" data-value="24"style="font-size: 23px;color: red;font-weight: bold;">0</span><span style="font-size: 23px;color: red;font-weight: bold;margin-right:3px">H</span><span style="font-size:20px;margin-left: 5px;">Assistants</span>
                                    </div>
                                    <div class="description pays"style="margin-bottom:20px"><!--<span class="count-tesxt">Pays</span>-->Nous sommes disponibles 24 heures par jous, 7 jours par semaine, 365 jours par an! Pour toutes vos questions ou requêtes n'hésitez pas à nous contacter.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="section container">
                <h2>Popular Hotels</h2>
                <div class="row image-box hotel listing-style1">
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
                                <a class="hover-effect popup-gallery" href="<?php echo base_url().'public/'; ?>ajax/slideshow-popup.html" title=""><img width="270" height="160" src="<?php echo base_url().'public/'; ?>images/h1.jpg" alt=""></a>
                            </figure>
                            <div class="details">
                                <span class="price">
                                    <small>avg/night</small>
                                    $360
                                </span>
                                <h4 class="box-title">Hotel Hilton<small>Paris france</small></h4>
                                <div class="feedback">
                                    <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 80%;"></span></div>
                                    <span class="review">270 reviews</span>
                                </div>
                                <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                <div class="action">
                                    <a href="hotel-detailed.html" class="button btn-small">SELECT</a>
                                    <a href="#" class="button btn-small yellow popup-map" data-box="48.856614, 2.352222">VIEW ON MAP</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0.6">
                                <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="270" height="160" src="<?php echo base_url().'public/'; ?>images/h2.jpg" alt=""></a>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/night</small>$188</span>
                                <h4 class="box-title">Forte Do Vale<small>Albufeira</small></h4>
                                <div class="feedback">
                                    <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 80%;"></span></div>
                                    <span class="review">170 reviews</span>
                                </div>
                                <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                <div class="action">
                                    <a href="hotel-detailed.html" class="button btn-small">SELECT</a>
                                    <a href="#" class="button btn-small yellow popup-map" data-box="37.089072, -8.247880">VIEW ON MAP</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0.9">
                                <a class="hover-effect popup-gallery" href="<?php echo base_url().'public/'; ?>ajax/slideshow-popup.html" title=""><img width="270" height="160" src="<?php echo base_url().'public/'; ?>images/h3.jpg" alt=""></a>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/night</small>$322</span>
                                <h4 class="box-title">Gran Canaria<small>spain</small></h4>
                                <div class="feedback">
                                    <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 80%;"></span></div>
                                    <span class="review">485 reviews</span>
                                </div>
                                <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                <div class="action">
                                    <a href="hotel-detailed.html" class="button btn-small">SELECT</a>
                                    <a href="#" class="button btn-small yellow popup-map" data-box="40.463667, -3.749220">VIEW ON MAP</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sms-6 col-sm-6 col-md-3">
                        <article class="box">
                            <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="1.2">
                                <a class="hover-effect popup-gallery" href="ajax/slideshow-popup.html" title=""><img width="270" height="160" src="<?php echo base_url().'public/'; ?>images/h4.jpg" alt=""></a>
                            </figure>
                            <div class="details">
                                <span class="price"><small>avg/night</small>$170</span>
                                <h4 class="box-title">Roosevelt Hotel<small>New york</small></h4>
                                <div class="feedback">
                                    <div title="4 stars" class="five-stars-container" data-toggle="tooltip" data-placement="bottom"><span class="five-stars" style="width: 80%;"></span></div>
                                    <span class="review">75 reviews</span>
                                </div>
                                <p class="description">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</p>
                                <div class="action">
                                    <a href="hotel-detailed.html" class="button btn-small">SELECT</a>
                                    <a href="#" class="button btn-small yellow popup-map" data-box="40.705631, -73.978003">VIEW ON MAP</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>



            <div class="global-map-area section parallax" data-stellar-background-ratio="0.5"style="display:none">
                <div class="container description text-center">
                    <h1>How CBH Works?</h1>
                    <br>
                    <div class="travelo-process">
                        <img src="<?php echo base_url().'public/'; ?>images/travelo_process.png" alt="">
                        <div class="process first icon-box style12">
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="1">
                                <h4>Explore Destinations</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="icon-wrapper animated" data-animation-type="slideInLeft" data-animation-delay="0">
                                <i class="soap-icon-beach circle"></i>
                            </div>
                        </div>
                        <div class="process second icon-box style12">
                            <div class="icon-wrapper animated" data-animation-type="slideInRight" data-animation-delay="1.5">
                                <i class="soap-icon-availability circle"></i>
                            </div>
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="2.5">
                                <h4>Check Availability</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="process third icon-box style12">
                            <div class="icon-wrapper animated" data-animation-type="slideInRight" data-animation-delay="2">
                                <i class="soap-icon-stories circle"></i>
                            </div>
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="3">
                                <h4>Book Online</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="process forth icon-box style12">
                            <div class="details animated" data-animation-type="fadeInUp" data-animation-delay="4.5">
                                <h4>Get Ready to Fly</h4>
                                <p class="hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="icon-wrapper animated" data-animation-type="slideInLeft" data-animation-delay="3.5">
                                <i class="soap-icon-plane-left takeoff-effect1 circle"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="global-map-area1 section parallax" data-stellar-background-ratio="0.5">
                <div class="container description">
                    <div class="col-sm-6 col-md-3">
                        <div class="icon-box style6 animated" data-animation-type="slideInLeft" data-animation-delay="0">
                            <i class="soap-icon-friends"></i>
                            <div class="description">
                                <h4 class="box-title">Group Booking</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="icon-box style6 animated" data-animation-type="slideInDown" data-animation-delay="0.6">
                            <i class="soap-icon-pickanddrop"></i>
                            <div class="description">
                                <h4 class="box-title">Car Hiring</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="icon-box style6 animated" data-animation-type="slideInDown" data-animation-delay="0.9">
                            <i class="soap-icon-insurance"></i>
                            <div class="description">
                                <h4 class="box-title">Travel Insurance</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="icon-box style6 animated" data-animation-type="slideInRight" data-animation-delay="1.2">
                            <i class="soap-icon-guideline"></i>
                            <div class="description">
                                <h4 class="box-title">Travel Guidelines</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="global-map-area promo-box no-margin parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="content-section description pull-right col-sm-9">
                        <div class="table-wrapper hidden-table-sm">
                            <div class="table-cell">
                                <h2 class="m-title animated" data-animation-type="fadeInDown" data-animation-duration="1.5">
                                    Tell us where you would like to go.<br /><em>12,000+ Hotel and Resorts Available!</em>
                                </h2>
                            </div>
                            <div class="table-cell action-section col-md-4 no-float">
                                <form method="post" action="hotel-list-view.html">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-12">
                                            <input type="text" class="input-text input-large full-width" value="" placeholder="Enter destination or hotel name" />
                                        </div>
                                        <div class="col-xs-6 col-md-12">
                                            <button class="full-width btn-large">search hotels</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="image-container col-sm-4" style="margin-bottom:20px; margin-top:10px;">
                        <img src="<?php echo base_url().'public/'; ?>images/h5.jpg" alt="" width="342" height="258" class="animated" data-animation-type="fadeInUp" />
                    </div>
                </div>
            </div>




            <footer id="footer">
                <div class="footer-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <h2 style="color:white">Discover</h2>
                                <ul class="discover triangle hover row">
                                    <li class="col-xs-6"><a href="#">Safety</a></li>
                                    <li class="col-xs-6"><a href="#">About</a></li>
                                    <li class="col-xs-6"><a href="#">Top Picks</a></li>
                                    <li class="col-xs-6"><a href="#">Latest Jobs</a></li>
                                    <li class="active col-xs-6"><a href="#">Mobile</a></li>
                                    <li class="col-xs-6"><a href="#">Press Releases</a></li>
                                    <li class="col-xs-6"><a href="#">Why Host</a></li>
                                    <li class="col-xs-6"><a href="#">Blog Posts</a></li>
                                    <li class="col-xs-6"><a href="#">Social Connect</a></li>
                                    <li class="col-xs-6"><a href="#">Help Topics</a></li>
                                    <li class="col-xs-6"><a href="#">Site Map</a></li>
                                    <li class="col-xs-6"><a href="#">Policies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h2 style="color:white">Travel News</h2>
                                <ul class="travel-news">
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                            </a>
                                        </div>
                                        <div class="description">
                                            <h5 class="s-title"><a href="#">Amazing Places</a></h5>
                                            <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                            <span class="date">25 Sep, 2013</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <a href="#">
                                                <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                            </a>
                                        </div>
                                        <div class="description">
                                            <h5 class="s-title"><a href="#">Travel Insurance</a></h5>
                                            <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                            <span class="date">24 Sep, 2013</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h2 style="color:white">Mailing List</h2>
                                <p>Sign up for our mailing list to get latest updates and offers.</p>
                                <br />
                                <div class="icon-check">
                                    <input type="text" class="input-text full-width" placeholder="your email" />
                                </div>
                                <br />
                                <span>We respect your privacy</span>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <h2 style="color:white">About CHB Booking</h2>
                                <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                                <br />
                                <address class="contact-details">
                                    <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                    <br />
                                    <a href="#" class="contact-email">help@chbbooking.com</a>
                                </address>
                                <ul class="social-icons clearfix">
                                    <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                    <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                    <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                    <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                    <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                    <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                    <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom gray-area">
                    <div class="container">
                        <div class="logo pull-left">
                            <a href="index.html" title="CHB Booking">
                                <img src="<?php echo base_url().'public/'; ?>images/logo.png" alt="CHB Booking" />
                            </a>
                        </div>
                        <div class="pull-right">
                            <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                        </div>
                        <div class="copyright pull-right">
                            <p>&copy; 2019 CHB Booking</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>



        <!-- Javascript -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery-1.11.1.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery.noconflict.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/modernizr.2.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery-ui.1.10.4.min.js"></script>

        <!-- Twitter Bootstrap -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/bootstrap.js"></script>

        <!-- load revolution slider scripts -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

        <!-- Flex Slider -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>components/flexslider/jquery.flexslider-min.js"></script>

        <!-- load BXSlider scripts -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>components/jquery.bxslider/jquery.bxslider.min.js"></script>

        <!-- parallax -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/jquery.stellar.min.js"></script>

        <!-- waypoint -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/waypoints.min.js"></script>

        <!-- load page Javascript -->
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/theme-scripts.js"></script>
        <script type="text/javascript" src="<?php echo base_url().'public/'; ?>js/scripts.js"></script>
         <script type="text/javascript" src="<?php echo base_url(); ?>public/js/Validation/js/jquery.validationEngine.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>public/js/Validation/js/languages/jquery.validationEngine-en.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>public/js/Validation/css/validationEngine.jquery.css" media="all" type="text/css"/>
        <script type="text/javascript">
        $(document).ready(function () {
		$("#hotelsearch_form").validationEngine();
		});
                                                        $(".flexslider").flexslider({
                                                            animation: "fade",
                                                            controlNav: false,
                                                            animationLoop: true,
                                                            directionNav: false,
                                                            slideshow: true,
                                                            slideshowSpeed: 5000
                                                        });

                                                       /* $(document).ready(function () {

                                                            $("input[@name='optradio']").change(function () {
                                                                alert('hii');
                                                                // Do something interesting here
                                                                $("#return_date").hide();
                                                            });




                                                        });


                                                        function show1() {
                                                            document.getElementById('div1').style.display = 'none';
                                                        }
                                                        function show2() {
                                                            document.getElementById('div1').style.display = 'block';
                                                        }*/
        </script>
        

        <script>
                                                        $(document).ready(function () {
                                                            $("#guests").focus(function () {
                                                                //alert();
                                                                $(this).siblings(".addguest").fadeIn()
                                                            }), $(".btn-done span").on("click", function () {
                                                                childSum = 0, $(".childSelected").each(function () {
                                                                    optionSelected = $("option:selected", this), valueSelected = this.value, childSum += parseFloat(valueSelected)
                                                                }), adultSum = 0, $(".adultSelected").each(function () {
                                                                    optionSelected = $("option:selected", this), valueSelected = this.value, adultSum += parseFloat(valueSelected)
                                                                }), totalGuest = adultSum + childSum, $("#guests").val(totalGuest + " Guests"), $(".addguest").fadeOut()
                                                            })
                                                        }), $(document).ready(function () {
                                                            $("body").on("change", ".childSelected", function (e) {
                                                                optionSelected = $("option:selected", this), valueSelected = this.value, myVal = $(this).parent().parent().parent().parent().data("value"), "0" == valueSelected ? ($(this).parent().parent().parent().siblings(".specifyAge").hide(), $(this).parent().parent().parent().siblings(".specifyAge").children().children().children(".childAge").hide()) : ($(this).parent().parent().parent().siblings(".specifyAge").show(), function () {
                                                                    for (html = [], i = 0; i < valueSelected; i++)
                                                                        varr = "child_age[" + myVal + "][]", html.push('<div class="col-xs-3 col-sm-2 col-md-10 childAge"><div class="inner-field"><select class="yi-select cAgeSelected form-control" name="' + varr + '"><option value="2">2</option><option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> </select> </div></div>')
                                                                }(), $(this).parent().parent().parent().siblings(".specifyAge").children().children(".specifyChildrenAges").html(html.join("")))
                                                            }), $(".noOfRoomsSel").on("change", function (e) {
                                                                optionSelected = $("option:selected", this), valueSelected = this.value,
                                                                        function () {
                                                                            for (html = [], i = 1; i < valueSelected; i++)
                                                                                divVal = i, roomCnt = i + 1, html.push('<div class="room-container row" data-value="' + divVal + '"> <div class="col-xs-12 col-sm-2 col-md-2"> <label class="roomTitl"> Room <em class="roomCount">' + roomCnt + '</em> : </label> </div><div class="col-xs-12 col-sm-5 col-md-5"> <div class="adult"> <div class="inner-field"> <span class="inner-titles">Adult</span> <select class="yi-select adultSelected form-control" name="adult[]" id="adult_count' + roomCnt + '"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> </select> </div><label class="guestTitl"><small>(12+ yrs)</small></label> </div></div><div class="col-xs-12 col-sm-5 col-md-5"> <div class="child"> <div class="inner-field"> <span class="inner-titles">Children</span> <select class="yi-select childSelected form-control" name="child[]" id="child_count' + roomCnt + '" data_count="0"> <option value="0">0</option> <option value="1">1</option> <option value="2">2</option>  </select> </div><label class="guestTitl"><small>(2-12 yrs)</small></label> </div></div><div class="clearfix"></div><div class="specifyAge" style="display:none"><div class="row"> <label class="guestTitl">Specify Children ages (2-12 yrs)</label> <div class="specifyChildrenAges"> </div></div></div></div><div class="clearfix"></div>')
                                                                        }(), $(".appendRoom").html(html.join(""))
                                                            })
                                                        });



        </script>




        <script>
            $(document).ready(function () {
                $('.select-bg').each(function () {

                    // Cache the number of options
                    var $this = $(this),
                            numberOfOptions = $(this).children('option').length;

                    // Hides the select element
                    $this.addClass('s-hidden');

                    // Wrap the select element in a div
                    $this.wrap('<div class="select"></div>');

                    // Insert a styled div to sit over the top of the hidden select element
                    $this.after('<div class="styledSelect"></div>');

                    // Cache the styled div
                    var $styledSelect = $this.next('div.styledSelect');

                    // Show the first select option in the styled div
                    $styledSelect.text($this.children('option').eq(0).text());

                    // Insert an unordered list after the styled div and also cache the list
                    var $list = $('<ul />', {
                        'class': 'options'
                    }).insertAfter($styledSelect);

                    // Insert a list item into the unordered list for each select option
                    for (var i = 0; i < numberOfOptions; i++) {
                        $('<li />', {
                            text: $this.children('option').eq(i).text(),
                            rel: $this.children('option').eq(i).val()
                        }).appendTo($list);
                    }

                    // Cache the list items
                    var $listItems = $list.children('li');

                    // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
                    $styledSelect.click(function (e) {
                        e.stopPropagation();
                        $('div.styledSelect.active').each(function () {
                            $(this).removeClass('active').next('ul.options').hide();
                        });
                        $(this).toggleClass('active').next('ul.options').toggle();
                    });

                    // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
                    // Updates the select element to have the value of the equivalent option
                    $listItems.click(function (e) {
                        e.stopPropagation();
                        $styledSelect.text($(this).text()).removeClass('active');
                        $this.val($(this).attr('rel'));
                        $list.hide();
                        /* alert($this.val()); Uncomment this for demonstration! */
                    });

                    // Hides the unordered list when clicking outside of it
                    $(document).click(function () {
                        $styledSelect.removeClass('active');
                        $list.hide();
                    });

                });
            });
        </script>
        <!--######################-->


        <script>
            $(document).ready(function () {
                $("#guests").focus(function () {
                    $(this).siblings(".addguest").fadeIn()
                }), $(".btn-done span").on("click", function () {

                    //childSum = 0, $(".childSelected").each(function() {
                    // optionSelected = $("option:selected", this), valueSelected = this.value, childSum += parseFloat(valueSelected)
                    //}), adultSum = 0, $(".adultSelected").each(function() {
                    //  optionSelected = $("option:selected", this), valueSelected = this.value, adultSum += parseFloat(valueSelected)
                    //}),



                    var adtCount1 = parseInt($("#adult_count1 li.active").attr('id'));
                    $('#adult_count11').val(adtCount1);
                    //alert($('#adult_count1').val());
                    var chdCount1 = parseInt($("#child_count1 li.active").attr('id'));
                    $('#child_count11').val(chdCount1);
                    var totalCount1 = adtCount1 + chdCount1;

                    var adtCount2 = parseInt($("#adult_count2 li.active").attr('id'));
                    $('#adult_count22').val(adtCount2);
                    var chdCount2 = parseInt($("#child_count2 li.active").attr('id'));
                    $('#child_count22').val(chdCount2);
                    var totalCount2 = adtCount2 + chdCount2;

                    var adtCount3 = parseInt($("#adult_count3 li.active").attr('id'));
                    $('#adult_count33').val(adtCount3);
                    var chdCount3 = parseInt($("#child_count3 li.active").attr('id'));
                    $('#child_count33').val(chdCount3);
                    var totalCount3 = adtCount3 + chdCount3;

                    if ($("#room2").css('display') == 'none') {
                        totalCount2 = 0;
                    }

                    if ($("#room3").css('display') == 'none') {
                        totalCount3 = 0;
                    }


                    totalGuest = totalCount1 + totalCount2 + totalCount3, $("#guests").val(totalGuest + " Guests"), $(".addguest").fadeOut()
                })
            }), $(document).ready(function () {
                $("#child_count1 li").click(function () {
                    var chdCount1 = parseInt($("#child_count1 li.active").attr('id'));
                    if (chdCount1 > 0) {
                        $(".room1-head").show();
                    } else {
                        $(".room1-head").hide();
                    }
                    if (chdCount1 == 1) {
                        $(".room1_child1").show();
                        $(".room1_child2").hide();
                    }
                    if (chdCount1 == 2) {
                        $(".room1_child1").show();
                        $(".room1_child2").show();
                    }
                });

                $("#child_count2 li").click(function () {
                    var chdCount2 = parseInt($("#child_count2 li.active").attr('id'));
                    if (chdCount2 > 0) {
                        $(".room2-head").show();
                    } else {
                        $(".room2-head").hide();
                    }
                    if (chdCount2 == 1) {
                        $(".room2_child1").show();
                        $(".room2_child2").hide();
                    }
                    if (chdCount2 == 2) {
                        $(".room2_child1").show();
                        $(".room2_child2").show();
                    }
                });


                $("#child_count3 li").click(function () {
                    var chdCount3 = parseInt($("#child_count3 li.active").attr('id'));
                    if (chdCount3 > 0) {
                        $(".room3-head").show();
                    } else {
                        $(".room3-head").hide();
                    }
                    if (chdCount3 == 1) {
                        $(".room3_child1").show();
                        $(".room3_child2").hide();
                    }
                    if (chdCount3 == 2) {
                        $(".room3_child1").show();
                        $(".room3_child2").show();
                    }
                });
                $(".noOfRoomsSel").on("change", function (e) {
                    if ($(".noOfRoomsSel").val() == 1) {
                        $("#room1").show();
                        $("#room2").hide();
                        $("#room3").hide();
                    } else if ($(".noOfRoomsSel").val() == 2) {
                        $("#room1").show();
                        $("#room2").show();
                        $("#room3").hide();
                    } else {
                        $("#room1").show();
                        $("#room2").show();
                        $("#room3").show();
                    }
                });
            });
        </script>


        <script>
            $("#adult_count1 li").click(function () {
                $('#adult_count1 li.active').removeClass('active');
                $(this).addClass('active');
                var adtCount1 = parseInt($("#adult_count1 li.active").attr('id'));
                var chdCount1 = parseInt($("#child_count1 li.active").attr('id'));
                var totalCount1 = adtCount1 + chdCount1;
            });
            $("#child_count1 li").click(function () {
                $('#child_count1 li.active').removeClass('active');
                $(this).addClass('active');

                var adtCount1 = parseInt($("#adult_count1 li.active").attr('id'));
                var chdCount1 = parseInt($("#child_count1 li.active").attr('id'));

                var totalCount1 = adtCount1 + chdCount1;

            });
            $("#adult_count2 li").click(function () {
                $('#adult_count2 li.active').removeClass('active');
                $(this).addClass('active');
                var adtCount2 = parseInt($("#adult_count2 li.active").attr('id'));
                var chdCount2 = parseInt($("#child_count2 li.active").attr('id'));
                var totalCount2 = adtCount2 + chdCount2;
            });
            $("#child_count2 li").click(function () {
                $('#child_count2 li.active').removeClass('active');
                $(this).addClass('active');

                var adtCount2 = parseInt($("#adult_count2 li.active").attr('id'));
                var chdCount2 = parseInt($("#child_count2 li.active").attr('id'));

                var totalCount2 = adtCount2 + chdCount2;

            });

            $("#adult_count3 li").click(function () {
                $('#adult_count3 li.active').removeClass('active');
                $(this).addClass('active');
                var adtCount3 = parseInt($("#adult_count3 li.active").attr('id'));
                var chdCount3 = parseInt($("#child_count3 li.active").attr('id'));
                var totalCount3 = adtCount3 + chdCount3;
            });
            $("#child_count3 li").click(function () {
                $('#child_count3 li.active').removeClass('active');
                $(this).addClass('active');

                var adtCount3 = parseInt($("#adult_count3 li.active").attr('id'));
                var chdCount3 = parseInt($("#child_count3 li.active").attr('id'));

                var totalCount3 = adtCount3 + chdCount3;

            });

        </script>
    <script type="text/javascript">
   
function show1(){
  document.getElementById('div1').style.display ='none';
}
function show2(){
  document.getElementById('div1').style.display = 'block';
}
    </script>
<script>
    function zeroPad(num, count)
    {
		var numZeropad = num + '';
		while (numZeropad.length < count) {
				numZeropad = "0" + numZeropad;
		}
		return numZeropad;
    }
     function DateDiff(date1, date2)
     {
        var datediff = date2.getTime() - date1.getTime();
        var p=datediff / (24 * 60 * 60 * 1000);
        return (datediff / (24 * 60 * 60 * 1000));
    }
    function dateADD(currentDate)
    {
            var valueofcurrentDate = currentDate.valueOf() + (24 * 60 * 60 * 1000);
            var newDate = new Date(valueofcurrentDate);
            return newDate;
    }
</script>

<script type="text/javascript">
	$( "#departure_date" ).datepicker({
		numberOfMonths: 2,
		dateFormat: 'mm/dd/yy',
		minDate: 1,
		firstDay: 0,
		inline: true,

	});
</script>    
<script type="text/javascript">	
	$("#departure_date").change(function(){
			var selectedDate1= $("#departure_date").datepicker('getDate');
			var nextdayDate  = dateADD(selectedDate1);
			var nextDateStr = zeroPad((nextdayDate.getMonth()+1),2)+"/"+zeroPad(nextdayDate.getDate(),2)+"/"+(nextdayDate.getFullYear());
			$t = nextDateStr;

			var k=DateDiff(selectedDate1,nextdayDate);
			$kk = k;
			$('#flight_out').html('<input type="text" name="return_date" id="return_date" class="input-text full-width validate[required]" value="'+$t+'" readonly="readonly"/> ');+

			$( "#return_date").datepicker({
				 numberOfMonths: 2,
				 firstDay: 0,
				dateFormat: 'mm/dd/yy',
				minDate: $t,
				inline: true,
			});

		});
</script>  
<script type="text/javascript">
            var site_url = "<?php echo base_url(); ?>";
            jQuery(function () {
                jQuery("#origin").autocomplete({
                    source: site_url + "/home/airport_list_auto",
                    minLength: 1,
                    autoFocus: !0,
                    select: function (t, e) {
                        jQuery("input[name='origin1']").val(e.item.id)
                    }
                })
            });
</script> 

<script type="text/javascript">
            var site_url = "<?php echo base_url(); ?>";
            jQuery(function () {
                jQuery("#destination").autocomplete({
                    source: site_url + "/home/airport_list_auto",
                    minLength: 1,
                    autoFocus: !0,
                    select: function (t, e) {
						
                        jQuery("input[name='destination1']").val(e.item.id)
                    }
                })
            });
</script> 
<script type="text/javascript">
            var site_url = "<?php echo site_url(); ?>";
            jQuery(function () {
                jQuery("#city").autocomplete({
                    source: site_url + "/home/hotel_dest_auto",
                    minLength: 1,
                    autoFocus: !0,
                    select: function (t, e) {
						
                        jQuery("input[name='city']").val(e.item.id)
                    }
                })
            });
			
		jQuery("#check_in").datepicker({
		  numberOfMonths: 1,
		  dateFormat: 'dd/mm/yy',
		  minDate: 1,
		  firstDay: 0,
		  inline: true,

		});
	jQuery("#check_in").change(function () {
      var selectedDate1 = jQuery("#check_in").datepicker('getDate');
      var nextdayDate = dateADD(selectedDate1);
      var nextDateStr = zeroPad(nextdayDate.getDate(), 2) + "/" + zeroPad((nextdayDate.getMonth() + 1), 2) +
        "/" + (nextdayDate.getFullYear());
      $t = nextDateStr;
      var k = DateDiff(selectedDate1, nextdayDate);
      $kk = k;
      jQuery('#hotel_out').html(
        '<input type="text" name="org_cout" id="check_out" class="input-text full-width validate[required]" value="' +
        $t + '" readonly="readonly" style="cursor: pointer;"/> '); +
      //$(function() {
      jQuery("#check_out").datepicker({
        numberOfMonths: 1,
        firstDay: 0,
        dateFormat: 'dd/mm/yy',
        minDate: $t,
        inline: true,
      });
      //});
    });
</script> 
<script type="text/javascript">
$(document).ready(function()
{
$("input[type='radio']").change(function(){
if($(this).val()=="2")
{
$("#return_date_div").show();
}
else
{
$("#return_date_div").hide(); 
}
});


$("#flight_search").click(function()
{

   //--- passenger count ----
    adult = parseInt($('#adult_count').val());
   child = parseInt($('#child_count').val());
   infant = parseInt($('#infant_count').val());
   if(adult+child>9)
   {
        $('#errmsg').html("Total adult+child passenger should be Equal or less than 9");
        return false;
    }
    if(infant > adult)
    {
        $('#errmsg').html("Infant should be Equal OR less than Adult");
        return false;
    }

    //----- Return date ------
    return_date = $("#return_date").val();
    var radioValue = $("input[name='search_type']:checked"). val();

    departure_date = $("#departure_date").val();
    if(departure_date > return_date && radioValue==2)
    {
        $('#errmsg').html("Please select return date greater than departure date");
        return false;
    }
   
});

});
</script>

    </body>
</html>

