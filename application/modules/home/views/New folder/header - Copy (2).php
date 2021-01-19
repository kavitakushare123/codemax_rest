    <style>
    body {
  font-family: 'Source Sans Pro', sans-serif;
}
* {
  box-sizing: border-box;
}

.menu {
    width: 100%;
}
.menu-container {
  margin: 0 auto;
  background: #ffffff;
}
.menu .icon {
       display: inline-block;
    padding: 20px 45px 17px 31px;
    width: 19%;
    float: left;
    color: #000;
    font-size: 35px;
    font-weight: 700;
}
.menu .icon:hover{text-decoration: none;}
.menu .icon span{
    color:red;
}
.menu .icon p{}
.menu img {
    max-width: 100%;
}
.menu-mobile {
  display: none;
  padding: 20px;
}

.menu-mobile:after {
  content: "\f0c9";
  font-family: "Font Awesome 5 Free";
  display: inline-block;
  padding-right: 3px;
   vertical-align: middle;
   font-weight: 900;
  font-size: 21px;
 
  float: right;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-25%);
          transform: translateY(-25%);opacity: 0;
}
.menu-dropdown-icon:before {
     content: "\f078";
    
     font-family: "Font Awesome 5 Free";
  display: inline-block;
  padding-right: 3px;
   vertical-align: middle;
   font-weight: 900;
    
    cursor: pointer;
    float: right;
    padding: 6px 0;
    background: #fff;
    color: #333;
opacity: 0;
}

  .menu > ul {
    width: 85%;
    /* list-style: none; */
    /* padding: 0; */
    /* position: relative; */
    /* box-sizing: border-box; */
    /* clear: right; */
    /* display: block; */
    /* z-index: 9; */
}

.menu > ul:before,
.menu > ul:after {
  content: "";
  display: table;
}
.menu > ul:after {
  clear: both;
}
.menu > ul > li {
  float: left;
    background: #ffffff;
    padding: 0;
    margin: 0;
    border: 1px solid transparent;
    width: 15%;
}
.menu > ul > li a {
      text-decoration: none;
    padding: 32px 0px;
    display: block;
    color: #000;
    text-transform: capitalize;
    letter-spacing: 1px;
    font-size: 15px;
    font-weight: 300;
    text-align: center;
}
.menu > ul > li a:hover {
    color:red;


}
.menu > ul > li:hover {
  
    background: #fbfbfb;
    border: 1px solid #bfbaba24;

}
.menu > ul > li > ul {
 display: none;
    width: 97%;
    background: #fbfbfb;
    padding: 20px;
    position: absolute;
    z-index: 99;
    left: 11px;
    margin: 0 auto;
    list-style: none;
    box-sizing: border-box;
    margin-left: 0px;
    margin-right: auto;
}
.menu > ul > li > ul:before,
.menu > ul > li > ul:after {
  content: "";
  display: table;
}
.menu > ul > li > ul:after {
  clear: both;
}
.menu > ul > li > ul > li {
  margin: 0;
  padding-bottom: 0;
  list-style: none;
  width:16%;
  background: none;
  float: left;
}
.menu > ul > li > ul > li a {
    color: #000;
    padding: 5px 7px;
    width: 93%;
    display: block;
    border-bottom: 3px solid #ccc;
}

.menu > ul > li > ul > li a:hover{
    color:#ffffff;
    background: #479ede;
}
.menu > ul > li > ul > li > ul {
  display: block;
  padding: 0;
  margin: 10px 0 0;
  list-style: none;
  box-sizing: border-box;
}
.menu > ul > li > ul > li > ul:before,
.menu > ul > li > ul > li > ul:after {
  content: "";
  display: table;
}
.menu > ul > li > ul > li > ul:after {
  clear: both;
}
.menu > ul > li > ul > li > ul > li {
  float: left;
  width: 100%;
  padding: 10px 0;
  margin: 0;
  line-height:1;
  font-size: .8em;
}
.menu > ul > li > ul > li > ul > li a {
  text-align: left;
      border: 0;
    font-size: 13px;
    padding: 5px 15px;
    letter-spacing: 0.3px;
    line-height: 17px;
}
.menu > ul > li > ul.normal-sub {
  width: 300px;
  left: auto;
  padding: 10px 20px;
}
.menu > ul > li > ul.normal-sub > li {
  width: 100%;
}
.menu > ul > li > ul.normal-sub > li a {
  border: 0;
  text-align: left;
      padding: 5px 17px;
      font-size: 13px;
    line-height: 19px;
    letter-spacing: 0.5px;
}
.menu2 {
    /* margin-left: 212px !important; */
    width: 83% !important;
    margin-right: 0;
    margin: 0 auto;
    display: block;}

/* ––––––––––––––––––––––––––––––––––––––––––––––––––
Mobile style's
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media only screen and (max-width: 959px) {
  .menu-dropdown-icon:before {opacity:1;}
  .menu-container {
    width: 100%;
  }
  .menu-container .menu{
    display:inline-block;
   }
    .menu-mobile:after{opacity: 1;}
  .menu-mobile {
    display: block;    
    float: right;    
    padding: 20px 20px 0;
  }
  .menu-dropdown-icon:before {
    display: block;
  }
  .menu > ul {
    display: none;
    width:100% !important;
        margin: 0 !important;
  }
  .menu > ul > li {
           width: 89%;
    /* float: none; */
    display: block;
    margin-left: 19px;
    margin-right: auto;
  }
  .menu > ul > li a {
       text-decoration: none;
    padding: 7px 15px;
    display: block;
    color: #000;
    text-transform: capitalize;
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 300;
    text-align: left;
}
.menu > ul > li a:hover{    color: #0f7bef !important;}
  .menu > ul > li > ul {
    position: relative;    
    padding: 0 40px;
  }
  .menu > ul > li a i:hover{color:pink;}
  .menu > ul > li > ul.normal-sub {
    width: 100%;
  }
  .menu > ul > li > ul > li {
    float: none;
    width: 100%;
    margin-top: 20px;
  }
  .menu > ul > li > ul > li:first-child {
    margin: 0;
  }
  .menu > ul > li > ul > li > ul {
    position: relative;
  }
  .menu > ul > li > ul > li > ul > li {
    float: none;
  }
  .menu .show-on-mobile {
    display: block;
  }
  .logo{    width: 70% !important;}
}

</style>


    <div class="menu-container">
  <div class="menu">
      <p><a href="<?php echo base_url(); ?>" class="icon">IBZ<span>TOURS</span></a></p>
    <ul class="clearfix menu2">
      <li><a href="#">Destination
      </a>
        <ul>
              <li><a href="#">Africa</a>
                <ul>
              <li><a href="#">Namibia</a></li>
              <li><a href="#">South Africa</a></li>
              <li><a href="#">Morocco</a></li>
              <li><a href="#">Egypt</a></li>
              <li><a href="#">Tanzania</a></li>
            </ul>

              </li>
              <li><a href="#">Asia</a>
                <ul>
              <li><a href="#">Singapore</a></li>
              <li><a href="#">Thailand</a></li>
              <li><a href="#">Maldives</a></li>
              <li><a href="#">Cambodia</a></li>
              <li><a href="#">Vietnam</a></li>
              <li><a href="#">India</a></li>
            </ul>

              </li>
              <li><a href="#">Australia & NZ</a>
              <ul>
              <li><a href="#">Australia</a></li>
              <li><a href="#">New Zealand</a></li>
              <li><a href="#">Fiji</a></li>
              <li><a href="#">Papua New Guinea</a></li>
            </ul></li>
            </li>
              <li><a href="#">Europe</a>
              <ul>
              <li><a href="#">Italy</a></li>
              <li><a href="#">Greece</a></li>
              <li><a href="#">Scotland</a></li>
              <li><a href="#">Iceland</a></li>
              <li><a href="#">Switzerland</a></li>
              <li><a href="#">France</a></li>

            </ul></li>
            </li>
              <li><a href="#">North America</a>
              <ul>
              <li><a href="#">Canada</a></li>
              <li><a href="#">USA</a></li>
              <li><a href="#">Greenland</a></li>
              
            </ul></li>
            </li>
              <li><a href="#">Latin America</a>
              <ul>
              <li><a href="#">Peru</a></li>
              <li><a href="#">Bolivia</a></li>
              <li><a href="#">Chile</a></li>
              <li><a href="#">Cuba</a></li>
              <li><a href="#">Mexico</a></li>
              <li><a href="#">Colombia</a></li>
            </ul></li>
              
            </ul>

      </li>
      <li><a href="#">Travel Styles</a>
        <ul>
          
          <li>
            <ul>
              <li><a href="#">Hiking & Trekking</a></li>
              <li><a href="#">Wildlife</a></li>
              <li><a href="#">Safari</a></li>
              <li><a href="#">Bicycle</a></li>
            </ul>
          </li>
          <!--
          <li><a href="#">Cultural</i></a>
            <ul>
              <li><a href="#">Discovery</a></li>
              <li><a href="#">Christmas & New Year</a></li>
              <li><a href="#">In-depth Cultural</a></li>
               <li><a href="#">Historical</a></li>
              <li><a href="#">Coach / Bus</a></li>
              <li><a href="#">Train & Rail</a></li>
            </ul>
          </li>
          <li><a href="#">Marine</a>
            <ul>
              <li><a href="#">River Cruise</a></li>
              <li><a href="#">Ocean Cruise</a></li>
              <li><a href="#">Sailing</a></li>
              <li><a href="#">Boat</a></li>
              <li><a href="#">Polar</a></li>
              <li><a href="#">Rowing</a></li>
            </ul>
          </li>
          <li><a href="#">festival-events</a>
            <ul>
              <li><a href="#">European Christmas Markets</a></li>
              <li><a href="#">Oktoberfest</a></li>
              <li><a href="#">Anzac Day</a></li>
              <li><a href="#">Rio Carnival</a></li>
               <li><a href="#">Seasonal</a></li>
            </ul>
          </li>
          <li><a href="#">Independent</a>
            <ul>
              <li><a href="#">Self-Guided</a></li>
              <li><a href="#">Private / Custom</a></li>
              <li><a href="#">Self Drive</a></li>
              <li><a href="#">Hop On/Off</a></li>
              <li><a href="#">Flexi</a></li>
            </ul>
          </li>
          <li><a href="#">Special Intrest</a>
            <ul>
              <li><a href="#">Luxury Tours</a></li>
              <li><a href="#">Budget Tours</a></li>
              <li><a href="#">Solo Travel</a></li>
              <li><a href="#">Tours for young adults</a></li>
              <li><a href="#">Tours for seniors</a></li>
              <li><a href="#">Tours for couples</a></li>
              
            </ul>
          </li>
          -->
        </ul>
      </li>
      
      <li><a href="#">Deals</a>
        <ul>
          <li><a href="#">All Deals</a></li>
          <li><a href="#">Last Minute Deals</a></li>
          <li><a href="#">Early Bird Deals</a></li>
          <li><a href="#">2 for 1 Deals</a></li>
          <li><a href="#">Flight Deals</a></li>
         <!-- <li><a href="#">Empty sub</a>
            <ul>
                <li><img src="https://placeimg.com/300/200/people"></li>
            </ul>
          </li>-->
        </ul>
      </li>
       <li><a href="#">Help</a>
        <ul>
          <li><a href="#">Help Center</a></li>
          <li><a href="<?php echo base_url() . 'Home/about_us'; ?>">About Us</a></li>
          <li><a href="<?php echo base_url() . 'Home/contact_us'; ?>">Contact Us</a></li>
        </ul>
      </li>
      <li><a href="#"><?php if(isset($_SESSION['user_name']) && $_SESSION['user_name']!='') { echo 'Hai '.$_SESSION['user_name'].'!&nbsp&nbsp'; } ?>
      <i class="fas fa-user-tie"></i></a>
        <ul>
          <?php if(isset($_SESSION['user_name']) && $_SESSION['user_name']!='') { ?>
          <li><a href="<?php echo base_url().'customer' ?>">Profile</a></li>
          <li><a href="<?php echo base_url().'customer/customer_logout'; ?>">Logout</a></li>
        <?php } else { ?>
          <li><a href="<?php echo base_url().'customer/login'; ?>">User Login</a></li>
        <?php } ?>
        </ul>
      </li>
    </ul>
  </div>
</div>

<script>
  $(document).ready(function() {
      "use strict";
      $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
      $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
      $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">&nbsp;</a>");
      $(".menu > ul > li").hover(function(e) {
        if ($(window).width() > 943) {
          $(this).children("ul").stop(true, false).fadeToggle(150);
          e.preventDefault();
        }
      });
      $(".menu > ul > li").click(function() {
        if ($(window).width() <= 943) {
          $(this).children("ul").fadeToggle(150);
        }
      });
      $(".menu-mobile").click(function(e) {
        $(".menu > ul").toggleClass('show-on-mobile');
        e.preventDefault();
      });
    });
    $(window).resize(function() {
      $(".menu > ul > li").children("ul").hide();
      $(".menu > ul").removeClass('show-on-mobile');
    });

  </script>

