<?php
 include('token.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Contact Walkwel Technology | Website and Software Development Company Jalandhar</title>
<meta name="robots" content="index, follow" />
<meta name="title" content="Contact Walkwel Technology | Website and Software Development Company Jalandhar"/>
<meta name="keywords" content="Web design quotes, web development Jalandhar, SEO quote request" />
<meta name="description" content="Best Website design, mobile apps development company in Jalandhar Punjab. We do custom software, ecommerce, iPhone, Android, ERP, SEO, industrial training" />
<meta name="distribution" content="global" />
<meta name="rating" content="General" />
<meta name="language" content="En" />
<meta name="robots" content="all" />
<meta name="revisit-after" content="1 days">

<meta property="og:title" content="Contact Walkwel Technology | Website and Software Development Company Jalandhar"/>
<meta property="og:description" content="Best Website design, mobile apps development company in Jalandhar Punjab. We do custom software, ecommerce, iPhone, Android, ERP, SEO, industrial training" />
<meta property="og:type" content="Web Services" />
<meta property="og:url" content="http://www.walkwel.in" />
<meta property="og:site_name" content="Walkwel Technology Private Limited" />
<meta property="og:image" content="http://walkwel.in/img/walkwel-logo.png" />
<meta property="og:image:width" content="250" />
<meta property="og:image:height" content="84" />

<meta name="dc.title" content="Contact Walkwel Technology | Website and Software Development Company Jalandhar">
<meta name="dc.description" content="Best Website design, mobile apps development company in Jalandhar Punjab. We do custom software, ecommerce, iPhone, Android, ERP, SEO, industrial training">
<meta name="dc.keywords" content="Web design quotes, web development Jalandhar, SEO quote request">
<meta name="dc.language" content="En">
<meta name="dc.source" content="http://www.walkwel.in">
<meta name="dc.subject" content="Private IT Jobs in Jalandhar Punjab">
<meta name="dc.publisher" content="Walkwel Technology Private Limited">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:600' rel='stylesheet' type='text/css'>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/agency.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/css/menu.css" />
<link rel="stylesheet" type="text/css" href="assets/css/set2.css" />
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="assets/css/walkwel-css.css" />  
<link rel="stylesheet" type="text/css" href="assets/css/laxmi.css" />  
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />    
</head>
<body class="inner">
<?php include('header.php') ?>
<!-- Banner image/text -->
<div id="banner" class="m-services-header" >
  <div class="slider">
      <div class="image">
          <img src="assets/slider/aboutus.jpg" alt="about-walkwel" class="responsive" />
            <div class="m-about-head banner-title" style="width:100%; text-align:center;">
            <!--<h1>ABOUT US</h1>-->
            <div class="container-fluid">
                <h1>Contact Us</h1>
                <div class="breadcrumb-box">
                    <ul class="breadcrumb">
                      <li> <a href="index.html">Home</a> </li>
                      <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>            
        </div>
        </div>
    </div>
</div>

<!-- primary services -->
<div id="services" class="m-contact-pg" ><!--  data-1600="top:1200px;" data-1300="top:1435px;" -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="main-heading" style="padding-bottom:0;">
            <h3 >How can we help?</h3>
            <h4 >Fill the form below</h4>
        </div>
        <form method="post" id="contact-form" name="contact-form" action="contact-email.php">
          <div class="row">
            <div class="m-contact-field col-md-6">
              <input type="text" id="name" name="name" placeholder="Name" class="form-control" />
            </div>
             <div class="m-contact-field col-md-6">
              <input type="text" id="company" name="company" placeholder="Company"  class="form-control" />
            </div>
            <div class="m-contact-field col-md-6">
              <input type="text" id="email" name="email" placeholder="Email" class="form-control" />
            </div>
            <div class="m-contact-field col-md-6">
              <input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" />
            </div>
            <div class="m-contact-field col-md-12">
              <textarea rows="8" id="message" cols="42" name="message" placeholder="Message" class="form-control"></textarea>
            </div>
            <input type="hidden" name="contact_form_token" value="<?php echo  $_SESSION['session_token']; ?>" />
            
            <div class="m-contact-field col-md-6">
              <br>
              <input type="submit" class="btn btn-primary" name="submit" value="Send Message">
            </div>
          </div> 
        </form>      
      </div>
      <div class="col-md-4">
        <div class="main-heading" style="padding-bottom:0;padding-left:0;">
            <h3 >Reach Us</h3>
            <h4 >At our below offices.</h4>
        </div>
        <div class="m-contact-add">
          <div class="row">
            <div class="col-md-12">
              <h3>Jalandhar Office</h3>
              <p>4th Floor, PKF Building, Namdev Chowk,<br> Jalandhar (PB).<br>
                <i class="fa fa-phone"></i>&nbsp; (91) 181 5041414&nbsp;
                <i class="fa fa-envelope"></i>&nbsp; info@walkwel.in </p>
            <hr>
            </div>
            <div class="col-md-12 ">
              <h3>Banglore Office</h3>
               <p>Plot 50, 9th Main, BTM 1st Stage, <br>Bangalore 560059, India<br>
               <i class="fa fa-phone"></i>&nbsp;(91) 73537 00123&nbsp;
               <i class="fa fa-envelope"></i>&nbsp; banglore@walkwel.in </p>
            </div>
          </div>
        </div>    
      </div>
    </div>
<<<<<<< HEAD
    <div class="row">
      <div class="">
        <div class="mobile-map">
          <div class="view_map">
            <div class="content-map">
              <div class="row">
                <div class="col-md-12 text-center">
                  <i class="fa fa-map-marker" style ="color:#666; font-size:50px; padding:20px 0;"></i>
                </div>
                <div class="col-md-12 text-center">
                  <h3>4th Floor, PKF Building, Namdev Chowk, <br> Jalandhar (PB).<br><br></h3>   
                  <a onclick="hideViewMap();" class="btn btn-default">View Map</a>
                </div>
                <div class="col-md-12 contact-detail">
                  <div class="text-center" style="width:50%; float:left;"><p>Email - info@walkwel.in</p></div>
                  <div class="col-md-6 text-center" style="width:50%; float:left;"><p>Contact - +91-181-5041414</p></div>
                </div>
              </div>
            </div>
          </div>
          <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
          <div style="overflow:hidden;height:500px;width:100%;color:#444!important;">
            <div id="gmap_canvas" style="height:500px;width:100%;"></div>
            <style>#gmap_canvas img{max-width:none!important;background:none!important;}</style>
            <a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">wordpress-themes.org</a>
          </div>
          <script type="text/javascript"> 
            function init_map(){
              var myOptions = {zoom:15,center:new google.maps.LatLng(31.321463,75.582381),mapTypeId: google.maps.MapTypeId.ROADMAP};
              map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
              marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(31.321463,75.582381)});
              infowindow = new google.maps.InfoWindow({content:"<b>Walkwel Technology</b><br/>4th Floor, PKF Building, Namdev Chowk,<br/>Jalandhar (PB)." });
              google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
          </script>
        </div>
      </div>
    </div>
=======
    
>>>>>>> ec90c901dd5ecdc1dc7ddcf028c33633b14758ec
    </div>
<!-- footer -->
    <?php include('footer.php') ?>
</div>
<script type="text/javascript">
  function hideViewMap(){
    $('.view_map').fadeOut('slow');
  }  
</script>
</body>
</html>
