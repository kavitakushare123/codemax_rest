<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IBZTours</title>
        <!-- For favicon png -->

        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/css/flaticon/font/flaticon.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/css/font-awesome.min.css">
        <!--linear icon css-->
        <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
        <!--flaticon.css-->
        <!--slick.css-->
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/css/slick-theme.css">
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/bootstrap/css/bootstrap.min.css">
        <!-- bootsnav -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--style.css-->
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/css/style.css">
        <!--responsive.css-->
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/css/responsive.css">
        <!--testmonial&client_about-->
        <link href="<?php echo base_url() . 'public/'; ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'public/'; ?>lib/animate/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url() . 'public/'; ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <!--newsletter-->
        <!-- Animate.css -->
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/icomoon.css">

        <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/datepicker.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    
    </head>

    <body>



        <!--==========================
          Top Bar
        ============================
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
                                    <option value="usd">USD1</option>
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
        <?php $this->load->view('home/header'); ?>


        <!--==========================
        main section
      ============================-->
        <?php
        $sel = $this->Home_model->banner();
        ?>
        <section id="home" class="welcome-hero" style="background:url(<?php echo base_url() . 'public/uploads/banner/' . $sel->img_name; ?>)no-repeat;">
           <div class="container">
               
            <div class="welcome-hero-txt" style="padding-top: 125px;color: white">
                <h2 style="font-size: 48px;"><?php echo $sel->title; ?> </h2>
                    <p>
                        <?php echo $sel->description; ?>
                    </p>
                </div>
                <!--==========================
                        Search box
                  ============================-->
                <!-- Search Box -->

                <div class="search_box arrange">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="search_box_container d-flex flex-row align-items-center justify-content-start">
                                    <div class="search_form_container">
                                        <form method="POST" action="<?php echo base_url() . 'holiday/search' ?>" >
                                            <div class="d-flex flex-lg-row flex-column align-items-center justify-content-start">
                                                <ul class="search_form_list d-flex flex-row align-items-center justify-content-start flex-wrap">
                                                    
                                                    <li class=" search_box1 search_dropdown d-flex flex-row align-items-center justify-content-start border border-info" style="padding-left: 0px; padding-right: 0px; width: 60%;">


                                                        <select name="package_type" class="browser-default custom-select" style="height: 58px;">
                                                            <option value="0" selected>What do you want to do</option>
                                                            <?php
                                                            foreach ($package_types as $package_type) {
                                                                ?>
                                                                <option value="<?php echo $package_type->id; ?>"><?php echo $package_type->type_name; ?></option>
                                                            <?php } ?>
                                                        </select>

                                                    </li>
                                                    <li class=" search_box2 search_dropdown d-flex flex-row align-items-center justify-content-start border border-info" style="padding-left: 0px; padding-right: 0px; width: 40%;">


                                                        <select name="package_occasion" class="browser-default custom-select mysel2" style="height: 58px;">
                                                            <option value="0" selected>When</option>
                                                            <?php
                                                            foreach ($package_occasions as $package_occasion) {
                                                                ?>
                                                                <option value="<?php echo $package_occasion->id; ?>"><?php echo $package_occasion->occasions_name; ?></option>
                                                            <?php } ?>
                                                        </select>

                                                    </li>
                                                    

                                                </ul>
                                                <button type="submit" class="search_button">search</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/main section-->


        <div class="disable-search">
            <br><br><br><br>
            <br><br><br><br>
        </div>
        <!--==========================
                 Services Section
               ============================-->
        <div class="twoview">
            <br><br><br>
        <section id="speakers" class="wow fadeInUp">
            <form method="POST" action="" >
                <div class="container">
                    <div class="section-header text-center">
                        <h2 style="font-family: 'Domine', serif; font-size: 36px">Featured Tours</h2>

                    </div>


                    <div class="row">
                        <?php
                        $val = $this->Home_model->eventspeakers();
                        //print_r($val);die;
                        foreach ($val as $sel) {
                            ?>
                            <div class="col-lg-4 col-md-6 halfview">

                                <div class="speaker">
                                    <img src="<?php echo base_url() . 'public/uploads/eventspeaker/' . $sel->img_name; ?>" alt=" " class="img-fluid" style="height: 240px; width: 375px;">
                                    <div class="details">

                                        <h3><a href="<?php echo base_url() ?>holiday/search_package/<?php echo $sel->package_code; ?>"><?php echo $sel->title; ?></a></h3>
                                        <p><?php echo $sel->subtitle; ?></p>

                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>



                    </div>

                </div>

            </form>

        </section>
            <section id="services">
                <div class="container wow fadeIn">

                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="box">
                                <div class="icon"><a href="#"><i class="fas fa-thumbs-up"></i></a></div>
                                <h4 class="title"><a href="#">Best Selection</a></h4>
                                <p class="description">Compare 1000+carefully screened operators
                                    Read 100,000+genuine traveler reviews
                                    Choose from over 35,000 tours
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="box">
                                <div class="icon"><a href="#"><i class="fas fa-check"></i></a></div>
                                <h4 class="title"><a href="#">Best Price</a></h4>
                                <p class="description">Always pay the best and lowest price
                                    Earn unlimited travel credits with every booking
                                    Never pay credit card or booking fees
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="box">
                                <div class="icon"><a href="#"><i class="fas fa-lock"></i></a></div>
                                <h4 class="title"><a href="#">Trusted Payment</a></h4>
                                <p class="description">Book via our secure payment platform
                                    Enjoy flexible payment options
                                    Trusted by thousand of satisfied travelers 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- #services -->






        <!--==========================
          Our Portfolio Section
        ============================-->
        <section id="portfolio" class="wow fadeInUp ">
            <div class="row no-gutters">
                <!--  <div class="col-lg-2 col-md-4 col-sm-4 halfview">
                      <div class="portfolio-item wow fadeInUp ">
    
                          <img src="<?php // echo base_url() . 'public/';            ?>img/tour_package/pexels-photo-800532.jpeg" alt="" style="height: 225px">
                          <div class="portfolio-overlay  ">
                              <div class="portfolio-info"><label style="color: white;font-size: 18px">Europe</label>
                                  <br>
                                  <a href="#"> <p style="color: white">Italy</p></a>
                                  <a href="#"> <p style="color: white">France</p></a>
                                  <a href="#"><p style="color: white">Croatia</p></a>
                                  <a href="#"><p style="color: white">spain1</p></a>
                              </div>
                          </div>
    
                      </div>
                  </div>-->  <?php
                $sel = $this->db->get('cms_holiday1');
                $this->load->model('Home_model');
                $sel = $this->Home_model->holiday1_get();
                $i = 0;

                foreach ($sel as $val) {
                    ?>

                    <div class="col-lg-2 col-md-4 halfview ">

                        <div class="portfolio-item wow fadeInUp ">

                            <img src=<?php echo base_url() . "public/uploads/holiday1/" . $val->img_name; ?> alt="" style="height: 200px "width="200px">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><label style="color: white;font-size: 18px"> <?php echo $val->continental_name; ?></label>

                                    <br>
                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_1; ?>">

                                        <p style="color: white"><?php echo $val->countryname1; ?></p></a>

                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_2; ?>">
                                        <p style="color: white"><?php echo $val->countryname2; ?></p></a>

                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_3; ?>">
                                        <p style="color: white"><?php echo $val->countryname3; ?></p></a>

                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_4; ?>">
                                        <p style="color: white"><?php echo $val->countryname4; ?></p></a>
                                </div>
                            </div>

                        </div>

                    </div>
                <?php }
                ?>
                <!-- <div class="col-lg-2 col-md-4">
                     <div class="portfolio-item wow fadeInUp">
    
                         <img src="<?php //echo base_url() . 'public/';            ?>img/tour_package/pexels-photo-279183.jpeg" alt="" style="height: 225px">
                         <div class="portfolio-overlay">
                             <div class="portfolio-info"><label style="color: white;font-size: 18px">Australia</label>
                                 <br>
                                 <a href="#"><p style="color: white">Fiji</p></a>
                                 <a href="#"><p style="color: white">Papua</p></a>
                                 <a href="#"><p style="color: white">New Guinea</p></a>
                                 <a href="#"><p style="color: white">Aus. East cost</p></a>
                             </div>
                         </div>
    
                     </div>
                 </div>-->
                <!-- <div class="col-lg-2 col-md-4 halfview">
                     <div class="portfolio-item wow fadeInUp">
    
                         <img src="<?php //echo base_url() . 'public/';            ?>img/tour_package/pexels-photo-290386.jpeg" alt="" style="height: 225px">
                         <div class="portfolio-overlay">
                             <div class="portfolio-info"><label style="color: white;font-size: 18px">North America</label>
                                 <br>
                                 <a href="#"><p style="color: white">Cuba</p></a>
                                 <a href="#"><p style="color: white">Peru</p></a>
                                 <a href="#"><p style="color: white">Brazil</p></a>
                                 <a href="#"><p style="color: white">Ecuador</p></a>
                             </div>
                         </div>
    
                     </div>
                 </div>-->
                <!--   <div class="col-lg-2 col-md-4 halfview">
                       <div class="portfolio-item wow fadeInUp">
    
                           <img src="<?php // echo base_url() . 'public/';            ?>img/tour_package/pexels-photo-248193.jpeg" alt="" style="height: 225px">
                           <div class="portfolio-overlay">
                               <div class="portfolio-info"><label style="color: white;font-size: 18px">Asia</label>
                                   <br>
                                   <a href="#"><p style="color: white">Asia</p></a>
                                   <a href="#"><p style="color: white">Japan</p></a>
                                   <a href="#"><p style="color: white">Thailand</p></a>
                                   <a href="#"><p style="color: white">China</p></a>
                               </div>
                           </div>
    
                       </div>
                   </div>-->

                <!-- <div class="col-lg-2 col-md-4">
                     <div class="portfolio-item wow fadeInUp">
                        
                             <img src="<?php //echo base_url() . 'public/';            ?>img/tour_package/pexels-photo-800532.jpeg" alt="" style="height: 225px">
                             <div class="portfolio-overlay">
                                 <div class="portfolio-info"><label style="color: white;font-size: 18px">Japan</label>
                                     <br>
                                     <a href="#"><p style="color: white">Thailand</p></a>
                                           <a href="#"><p style="color: white">Asia</p></a>
                                           <a href="#"><p style="color: white">Ecuador</p></a>
                                           <a href="#"><p style="color: white">spain</p></a>
                                 </div>
                             </div>
                        
                     </div>
                 </div>-->

            </div>
        </section>
        <br><br>
        <!-- #portfolio -->

        <!--care-->
        <!--==========================
          About Us Section
        ============================-->

        <section id= "about">
            <div class="container">
                <?php
                $sel = $this->db->get('cms_customersupport');
                $this->load->model('Home_model');
                $sel = $this->Home_model->customersupport();

                $i = 0;

                foreach ($sel as $row) {
                    ?>
                    <h1 style="text-align: center"><?php echo $row->title; ?></h1>
                    <div class="row about-extra">

                        <div class="col-lg-6 wow fadeInUp">
                            <img src="<?php echo base_url() . 'public/uploads/customer support/' . $row->img_name; ?>" alt="" style="width: 100%;">
                        </div>
                        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                            <div class="top-region">
                                <br><br><br>
                            </div>
                            <h4><?php echo $row->sub_title; ?></h4>
                            <p style="text-align: justify">
                                <?php echo $row->description;
                                ; ?>
                            </p>
                          <!--  <p style="text-align: justify">
                                Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                            </p>-->

                        </div>
                    </div>
                </div>

                <?php
            }
            ?>
        </section>


        <br>
        <!--==========================
                 Our Portfolio Section
               ============================-->
        <?php /* ?>
        <section id="portfolio" class="wow fadeInUp">

            <div class="row no-gutters"><?php
                $this->load->model('Home_model');
                $sel = $this->Home_model->holiday2_get();
                $i = 1;
                foreach ($sel as $val) {
                    ?>

                    <div class="col-lg-2 col-md-3 halfview">
                        <div class="portfolio-item wow fadeInUp">

                            <img src="<?php echo base_url() . "public/uploads/holiday2/" . $val->img_name; ?>" alt="" style="height: 200px"width="200">
                            <div class="portfolio-overlay">
                                <div class="portfolio-info"><label style="color: white;font-size: 18px"><?php echo $val->continental_name; ?><?php echo $val->id; ?></label>
                                    <br>
                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_1; ?>">
                                        <p style="color: white"><?php echo $val->countryname1; ?></p></a>
                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_2; ?>">
                                        <p style="color: white"><?php echo $val->countryname2; ?></p></a>
                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_3; ?>"><p style="color: white"><?php echo $val->countryname3; ?></p></a>
                                    <a href="<?php echo base_url() ?>holiday/search_country/<?php echo $val->id_4; ?>">  <p style="color: white"><?php echo $val->countryname4; ?></p></a>
                                </div>
                            </div>

                        </div>
                    </div>

                   
                    <?php
                }
                ?>
            </div>

        </section>
     
        <!------------------------
        --------------------------
        four slider
        -------------------------
        ------------------------>
        <div id="colorlib-services">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-3 animate-box text-center fuse-top">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-around"></i>
                            </span>
                            <h3>Amazing Travel</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center disable">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-boat"></i>
                            </span>
                            <h3>Our Cruises</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center fuse-toper">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-landmark"></i>
                            </span>
                            <h3>Book Your Trip</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center disable">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-postcard"></i>
                            </span>
                            <h3>Nice Support</h3>
                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!----------------
        ------------------
        slider
    -----------------
    ----------------->
        <?php */?>
            <div class="container">

                <div class="text-center">
                    <h1 style="font-family: 'Domine', serif; font-size: 36px;color: #2c3e50"><b>Everything You Want & More</b></h1>
                    <br>
                </div>


                <div class="row col-md-12 col-lg-12 col-sm-12"><?php
                    $sel = $this->db->get('cms_everything');
                    $this->load->model('Home_model');
                    $sel = $this->Home_model->everything();

                    $i = 0;

                    foreach ($sel as $row) {
                        ?>
                    <div class="w-25">
                        <a href="<?php echo base_url() ?>holiday/search_package/<?php echo $row->package_code; ?>">
                            <img class="w-100" src="<?php echo base_url() . "public/uploads/everything/" . $row->img_name; ?>" alt="" style=" height: 153px;"></a>
                    </div> 
                        <?php
                    }
                    ?>
                </div>

            </div>
        
        <!--==========================
          Testimonials Section
        ============================-->
        <section id="testimonials" class="wow fadeInUp">
            <div class="container">
                <div class="section-header text-center">
                    <h2 style="font-family: 'Domine', serif; font-size: 36px"><b>Testimonials</b></h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <?php
                    $sel = $this->db->get('cms_testimonials');
                    $this->load->model('Home_model');
                    $sel = $this->Home_model->testimonials();

                    $i = 0;

                    foreach ($sel as $row) {
                        ?>
                        <div class="testimonial-item <?php
                        if ($i == 0) {
                            echo 'active';
                        }
                        ?>">

                            <p>  
                                <img src="<?php echo base_url() . 'public/'; ?>img/quote-sign-left.png" class="quote-sign-left" alt="">
                                <?php echo $row->description ?>  
                                <img src="<?php echo base_url() . 'public/'; ?>img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                             <!--<img src="<?php echo base_url() . 'public/'; ?>img/testimonial/testimonial-1.jpg" class="testimonial-img" alt="">-->
                            <img src="<?php echo base_url() . "public/uploads/testimonials/" . $row->img_name; ?>" class="testimonial-img" alt="">
                            <h3><?php echo $row->customer_name ?></h3>
                            <h4><?php echo $row->designation ?></h4>
                        </div>
                        <?php
                        $i++;
                    }
                    ?>
                    

                </div>

            </div>
        </section><!-- #testimonials -->


        <!--==========================
             Speakers Section
           ============================-->

        <!--==========================
          Clients Section
        ============================-->
        <?php /*
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 style="text-align: center;font-family: 'Domine', serif; font-size: 36px">Clients</h2>
                    </div>
                    <div class="owl-carousel clients-carousel">
                        <?php
                        $sel = $this->Home_model->client_icon();
                        foreach ($sel as $val) {
                            ?>
                            <img src="<?php echo base_url() . 'public/uploads/client/' . $val->img_name; ?>" alt="">
                            <?php
                        }
                        ?>


                    </div>

                </div>
            </div>
        </section><!-- #clients -->
<?php */?>
















        <!-- Newsletter -->

        <div class="newsletter text-white" style="background-color: #30759d">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container_2 text-center">
                            <div class="section_title"><h1>Our Newsletter</h1></div>
                        </div>
                    </div>
                </div>
                <div class="row newsletter_row">

                    <!-- Newsletter Content -->
                    <div class="col-lg-6">
                        <div class="newsletter_content">
                            <div class="newsletter_text">
                                <p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui fermentum eros hendrerit, id lobortis leo volutpat. Maecenas sollicitudin est in libero pretium interdum.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="col-lg-6 newsletter_col">

                        <form action="" class="newsletter_form" id="newsletter_form">
                            <input type="email" class="newsletter_input" placeholder="Your email"name="email" required="required">
                            <button class="newsletter_button">subscribe</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>



        <!--==========================
          Footer
        ============================-->
        <footer id="footer">
            <?php /* ?>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-info">
                            <img src="<?php echo base_url() . 'public/'; ?>img/footer/Capture.PNG" alt="TheEvenet">
                            <p style="text-align: justify">In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
                        </div>
                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>For Travellers</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Why TourRadar</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Why Touring</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Travel Insurance</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Flights</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Referral program</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>About TourRadar</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Life at TourRadar</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Customer Reviews</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Terms & Conditions</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Contact Us</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Awards</a></li>

                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>For Operators</h4>
                            <ul>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">List your tours</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Log In</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">I'm a guide</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">Widgets</a></li>
                                <li><i class="fa fa-angle-right"></i> <a href="#"  style="color: #2c3e50">List your tours</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
             <?php */?>
             
            <div class="container">
                <br>
                <div class="row double">
                    <div class="col-md-3 col-sm-8">
                        Social Network
                        <div class="row ">
                            <?php
                            $sel = $this->db->get('cms_social');
                            $this->load->model('Home_model');
                            $sel = $this->Home_model->get_sociallink();

                            $i = 0;
                            foreach ($sel as $row) {
                                ?>
                                <div class="col-md-3 fourview">

                                    <a href="<?php echo $row->facebook ?>">   <img src="<?php echo base_url() . 'public/'; ?>img/footer/social/Facebook_Round_48x48_2_44x44.png" style="background-color:linear-gradient(to bottom, white, Gray"></a>
                                </div>
                                <div class="col-md-3 fourview">
                                    <a href="<?php echo $row->google ?>"  > <img src="<?php echo base_url() . 'public/'; ?>img/footer/social/Google_plus_round_new_48x48_44x44.png" style="background-color:linear-gradient(to bottom, white, Gray);"></a>
                                </div>
                                <div class="col-md-3 fourview">
                                    <a href="<?php echo $row->linkedin ?>"  > <img src="<?php echo base_url() . 'public/'; ?>img/footer/social/Linkedin_round_48x48_44x44.png"></a>
                                </div>
                                <div class="col-md-3 fourview">
                                    <a href="<?php echo $row->twitter ?>"  > <img src="<?php echo base_url() . 'public/'; ?>img/footer/social/Twitter_round_48x48_44x44.png"></a>
                                </div>
                                <?php
                            }
                            ?>
                        </div>

                    </div>
                    <div class="vl double--to"></div>
                    <?php /* ?>
                    <div class="col-md-3">

                        Certified With
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo base_url() . 'public/'; ?>img/footer/social/download_5_100x48.png">
                            </div>
                        </div>

                    </div>
                    <?php */ ?>
                    <div class="vl"></div>
                    <?php /* ?>
                    <div class="col-md-4">
                        We Accept
                        <div class="row ">
                            <div class="col-md-3 fourview">
                                <img src="<?php echo base_url() . 'public/'; ?>img/footer/footer_image/1200px-Visa.svg_60x40.png">
                            </div>
                            <div class="col-md-3 fourview">
                                <img src="<?php echo base_url() . 'public/'; ?>img/footer/footer_image/download_1_60x40.png">
                            </div>
                            <div class="col-md-3 fourview">
                                <img src="<?php echo base_url() . 'public/'; ?>img/footer/footer_image/download_60x40.png">
                            </div>
                            <div class="col-md-3 fourview">
                                <img src="<?php echo base_url() . 'public/'; ?>img/footer/footer_image/og_image_60x40.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?php echo base_url() . 'public/'; ?>img/footer/footer_image/Capture_60x40_2.png">
                            </div>

                        </div>
                    </div>
                    <?php */ ?>
                </div>
            </div>
        </footer>


        <footer id="footer" >
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong> 2019 IBZ Tours</strong>
                </div>
                <div class="credits">

                    Designed and Developed By <a href="https://tekwalker.com/" style="color: red">Tekwalker</a>
                </div>
            </div>
        </footer>

        <!--script src="<?php echo base_url() . 'public/'; ?>js/jquery-date-picker.js"></script-->

        <script src="<?php echo base_url() . 'public/'; ?>assets/bootstrap/js/bootstrap.min.js"></script>

        <script src="<?php echo base_url() . 'public/'; ?>assets/js/slick.min.js"></script>

        <script src="<?php echo base_url() . 'public/'; ?>assets/js/custom.js"></script>

        <script src="<?php echo base_url() . 'public/'; ?>lib/superfish/superfish.min.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>lib/wow/wow.min.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>lib/magnific-popup/magnific-popup.min.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>lib/sticky/sticky.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>js/main.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>js/jquery.waypoints.min.js"></script>
        <script src="<?php echo base_url() . 'public/'; ?>js/customaies.js"></script>
        
    </body>
</html>