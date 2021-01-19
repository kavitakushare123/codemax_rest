<?php
if(!isset($_SESSION['user_id']))
	$_SESSION['user_id']='';
if($_SESSION['user_id']=='')
{
    ?>
<header id="header" class="navbar-static-top">
                <div class="topnav hidden-xs">
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

                <div class="main-header">

                    <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                        Mobile Menu Toggle
                    </a>

                    <div class="container">
                        <h1 class="logo navbar-brand">
                            <a href="<?php echo base_url(); ?>" title="CBH Booking- home">
                                <img src="<?php echo base_url() . 'public/'; ?>images/logo.png" alt="CBH Booking" />
                            </a>
                        </h1>

                        <nav id="main-menu" role="navigation">
                            <ul class="menu">
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url(); ?>index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                <a href="<?php echo base_url(); ?>index.php">Hotels</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="<?php echo base_url(); ?>#flights-tab">Flights</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="car-index.html">Cars</a>

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
                            <a href="<?php echo base_url(); ?>index.php">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                            <a href="<?php echo base_url(); ?>index.php">Hotels</a>

                            </li>
                            <li class="menu-item-has-children">
                            <a href="<?php echo base_url(); ?>#flights-tab">Flights</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="car-index.html">Cars</a>

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
            </header>
<?php
}
else
{
    ?>

<?php
?>
    <!-- Theme Styles -->
    <link rel="stylesheet" href="http://localhost/cbh/public/css/bootstrap.min.css">
    
    <!-- Current Page Styles -->
    
    <!-- Main Style -->
    
    <!-- Updated Styles -->
    
    <!-- Custom Styles -->
    
    <!-- Responsive Styles -->
    
	<!-- Bootstrap-extend -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>main/css/bootstrap-extend.css">
	
	<!-- Morris charts -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/vendor_components/morris.js/morris.css">
	
	<!-- weather weather -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/vendor_components/weather-icons/weather-icons.css">
	
	<!-- date picker -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css">
	
	<!-- daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>main/css/master_style.css">
	
	<!-- Lion_admin skins -->
	<link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>main/css/skins/_all-skins.css">
	 <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/animate.min.css">

    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/style.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/updates.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/custom.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?php echo base_url() . 'public/'; ?>css/responsive.css">

  <!-- jQuery 3 -->
  <script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_components/jquery/dist/jquery.min.js"></script>

 <!-- popper -->
 <script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_components/select2/dist/js/select2.full.js"></script>


<!-- date-range-picker -->

        <!-- bootstrap datepicker -->

        <!-- bootstrap color picker -->

        <!-- bootstrap time picker -->

        <!-- SlimScroll -->
        <script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

        <!-- iCheck 1.0.1 -->
        <script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_plugins/iCheck/icheck.min.js"></script>

        <!-- FastClick -->
        <script src="<?php echo base_url() . 'public/'; ?>/assets/vendor_components/fastclick/lib/fastclick.js"></script>

        <!-- Lion_admin App -->
        <script src="<?php echo base_url() . 'public/'; ?>/main/js/template.js"></script>

        <!-- Lion_admin for demo purposes -->

        <!-- Lion_admin for advanced form element -->
        <script src="<?php echo base_url() . 'public/'; ?>/main/js/pages/advanced-form-element.js"></script>
	

     <style type="text/css">
		.rounded-circle {
				border-radius: 0 !important;
			}
	 </style>

<header class="main-header">
<!-- Logo -->
<a href="index.html" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <b class="logo-mini">
      <span class="light-logo"><img src="<?php echo base_url() . 'public/'; ?>main/images/logo-light.png" alt="logo"></span>
      <span class="dark-logo"><img src="<?php echo base_url() . 'public/'; ?>main/images/logo-dark.png" alt="logo"></span>
  </b>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">
      <img src="<?php echo base_url() . 'public/'; ?>main/images/logo-light-text.png" alt="logo" class="light-logo">
        <img src="<?php echo base_url() . 'public/'; ?>main/images/logo-dark-text.png" alt="logo" class="dark-logo">

      </span>
</a>
<!-- Header Navbar -->
<!-----------------top_bar start---------------->
<nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  
		  		
		  
          <!-- Messages -->
          <!-- Notifications -->
          
          <!-- Tasks -->
         
		  <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

            <img src="<?php echo base_url().'public/';?>main/images/user5-128x128.jpg" class="user-image rounded-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'public/';?>main/images/user5-128x128.jpg" class="float-left rounded-circle" alt="User Image">

                <p>
                  <?php print $_SESSION['user_name']; ?>
                  <small class="mb-5">jb@gmail.com</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="<?php echo base_url().'Admin/my_profile';?>"><i class="ion ion-person"></i> My Profile</a>
                  </div>
                  <!--<div class="col-12 text-left">
                    <a href="#"><i class="ion ion-email-unread"></i> Inbox</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="#"><i class="ion ion-settings"></i> Setting</a>

                  </div>-->
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?php echo base_url() .'admin/agent_logout'; ?>"><i class="fa fa-power-off"></i> Logout</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>

<!-----------------top_bar end---------------->
</header>
<?php
     $this->view('admin/include/side_bar.php'); 

?>
  <!-- Left side column. contains the logo and sidebar end -->
<div class="control-sidebar-bg"></div>
  
<?php
     ///$this->view('admin/include/top_bar.php'); 
   //  $this->view('admin/include/side_bar.php'); 

}
?>