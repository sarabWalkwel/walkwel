<?php
 include('token.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
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
    <title>Contact us | IT Services | Walkwel Technology</title>
    <meta name="google-site-verification" content="13o4fDohXUvqSHVVKRlL8E5xE65IPE9QXN6KXFSBJmw" />
    <meta name="p:domain_verify" content="6e936a79889770d9057152483ea37fc3"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="For any query or suggestion, please contact Walkwel specialist’s team for further information. Use contact form or contact details to connect with us.">
    <meta name="keywords" content="ERP, CMS, SEO, Mobile Apps, E-commerce, Web Applications, Custom Software, Web Designing, IT Company, IT Services">
    <meta name="robots" content="all, index, follow">
    <meta name="copyright" content="Copyright © 2014 Walkwel Technology Pvt. Ltd. All Rights Reserved.">
    <meta name="author" content="walkwel.in">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7">
    <meta name="rating" content="safe for kids">
    <meta name="distribution" content="Global" />
    <meta name="publisher" content="http://www.walkwel.in" />
</head>
<body class="inner">
<?php include('header.php') ?>
<!-- Banner image/text -->
<div id="banner" class="m-services-header contact" >
  <div class="slider">
      <div class="image">
          <img src="assets/slider/contact-walkwel.jpg" alt="contact-Walkwel" class="responsive" />
            <div class="m-about-head banner-title" style="width:100%; text-align:center;">
            <h3>Interested in working with us?</h3>
            </div>
        </div>
    </div>
</div>
<!-- about us -->
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
    <div class="row">
      <div class="">
        <div class="">
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
    </div>
    <?php include('footer.php') ?>
</div>
<!-- footer -->

<!-- scripts -->
<script type="text/javascript" src="assets/js/skrollr.js"></script>
<script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="assets/js/walkwel.js"></script>
<script type="text/javascript" src="assets/js/contact-validate.js"></script>
<script type="text/javascript">
  function hideViewMap(){
    $('.view_map').fadeOut('slow');
  }  
</script>
</body>
</html>
