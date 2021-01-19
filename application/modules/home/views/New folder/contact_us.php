<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url().'public/' ?>special/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="<?php echo base_url().'public/' ?>special/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?php echo base_url().'public/' ?>special/css/contact.css" rel="stylesheet">




        <link rel="stylesheet" href="<?php echo base_url().'public/' ?>assets/css/responsive.css">
        <link rel="stylesheet" href="<?php echo base_url().'public/' ?>special/contact.css">

        <link rel="stylesheet" href="<?php echo base_url().'public/' ?>assets/css/font-awesome.min.css">
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

                        <li><a href="<?php echo base_url().'public/' ?><img src="assets/images/Capture_2.PNG"></a></li>
                        <li><a href="<?php echo base_url().'public/' ?><img src="assets/images/Capturefd.PNG"></a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header>




        <div class="card">
            <div class="card-header">
                <div class="container" style="padding: 5px;">
                    <span style="font-size: 36px;color: #72809c" ><b>Contact</b></span><span style="font-size: 36px;"> Us</span><br>
                    <a href="#" style="color: #72809cab;font-size: 13px;">Home</a><span style="color: #c3b9b9;font-size: 12px;"> / </span><a href="#" style="font-size: 13px;color: #903535e0">About Us</a>
                </div>
            </div>
        </div>
        <!-- start sectoion contact -->
        <div id="contact" class="paddsection">
            <div class="container">
                <div class="contact-block1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="contact-contact text-center">
                                 <?php
                $sel = $this->db->get('cms_contactdetails');
                $this->load->model('Home_model');
                $sel = $this->Home_model->contact_details();

                $i = 0;

                foreach ($sel as $row) {
                    ?>
                                <ul class="contact-details">
                                    <li><i class="fas fa-map-marker-alt" style="color: #03c4eb"></i> <span> <?php echo $row->location;?><br>
                                           <br>
                                            </span></li>
                                    <li> <i class="fas fa-home" style="color: #03c4eb"></i><span> <?php echo $row->home;?><br>
                                            <br>
                                            </span></li>
                                    <li><i class="fas fa-mobile-alt" style="color: #03c4eb"></i><span> <?php echo $row->mobileno;?></span></li>
                                    <li><i class="fas fa-at" style="color: #03c4eb"></i><span> <?php echo $row->email;?></span></li>
                                </ul>
                                <?php
                }
                ?>
                           <!--      <ul class="contact-details">
                                    <li><i class="fas fa-map-marker-alt" style="color: #03c4eb"></i> <span> Teckwalker<br>
                                            software developer<br>
                                            Near COSOMO</span></li>
                                    <li> <i class="fas fa-home" style="color: #03c4eb"></i><span> Teckwalker<br>
                                            software developer<br>
                                            Near COSOMO</span></li>
                                    <li><i class="fas fa-mobile-alt" style="color: #03c4eb"></i><span> +88 9744525854</span></li>
                                    <li><i class="fas fa-at" style="color: #03c4eb"></i><span> Teckwalker@example.com</span></li>
                                </ul>-->
                            </div>
                        </div>
                        <div class="col-lg-6">
                           
                            <form action="<?php echo base_url() . 'Home/insert_contact_us' ?>" method="post" role="form" class="contactForm">
                                <div class="row">
                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                    <div id="errormessage"></div>
                                    <div class="col-lg-6">
                                        <div class="form-group contact-block1">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Your fName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required=""/>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                  <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required="" />
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Message" required=""></textarea>
                                            <div class="validation"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn black block" style="">Button</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer id="footer"  style="margin-top:-55px">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong>Tekwalker</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#" style="color: red">Tekwalker</a>
                </div>
            </div>
        </footer>
        <!-- start sectoion contact -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="<?php echo base_url().'public/' ?>special/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?php echo base_url().'public/' ?>special/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url().'public/' ?>special/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?php echo base_url().'public/' ?>special/js/mdb.js"></script>
    </body>

</html>
