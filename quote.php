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
    <title>Get a Free Quote | Walkwel Technology</title>
    <meta name="google-site-verification" content="13o4fDohXUvqSHVVKRlL8E5xE65IPE9QXN6KXFSBJmw" />
    <meta name="p:domain_verify" content="6e936a79889770d9057152483ea37fc3"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get a free quote! If you want to use our services or just to know cost estimation of project then please fill the quote form and send to us. We will contact back to you shortly.">
    <meta name="keywords" content="Enterprise Solutions, Web Design &amp; Development, Walkwel, ERP, Mobile Applications Development, Web Development, Customer Software Development, Enterprise Resource Planning">
    <meta name="robots" content="all, index, follow">
    <meta name="copyright" content="Copyright © 2014 Walkwel Technology Pvt. Ltd. All Rights Reserved.">
    <meta name="author" content="walkwel.in">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7">
    <meta name="rating" content="safe for kids">
    <meta name="distribution" content="Global" />
    <meta name="publisher" content="http://www.walkwel.in" />
<style>
.button_down_container {
  width: 100px;
  height: 100px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  margin-top: -50px;
  z-index: 88;
  cursor: pointer;
  overflow: hidden;
  text-align: center;
}

.arrow-down {
  position: absolute;
  width: 0;
  height: 0;
  border-left: 20px solid transparent;
  border-right: 20px solid transparent;
  border-top: 20px solid rgba(255,255,255,0.7);
  margin-top: -10px;
  margin-left: -20px;
}
.arrow_pos1 {
  top: 60%;
  left: 50%;
}
.arrow_pos2 {
  top: 40%;
  left: 50%;
}
</style>
</head>
<body class="inner">
<!-- Header logo/nav -->
<?php include('header.php') ?>
<!-- Banner image/text -->
<div id="banner" class="m-services-header contact" >
  <div class="slider">
      <div class="image">
          <img src="assets/slider/contact-header.jpg" alt="About-Walkwel" class="responsive" />
            <div class="m-about-head banner-title" style="width:100%; text-align:center;">
            <h3>Get a free quote !</h3>
            </div>
        </div>
    </div>
</div>
<!-- about us -->
<!-- primary services -->
<div id="services" class="m-contact-pg" ><!--  data-1600="top:1200px;" data-1300="top:1435px;" -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="main-heading" style="padding-bottom:0;">
            <h3 >Let's work together</h3>
            <h4 >Fill the form below</h4>
        </div>
        <form method="post" id="quote-form" action="quote-email.php">
          <div class="row">
            <div class="m-contact-field col-md-6">
              <input type="text" id="name" name="name" placeholder="What service are you looking for ?" class="form-control" />
            </div>
              <div class="m-contact-field col-md-6">
                <input type="text" id="company" name="company" placeholder="What is your budget for the project ?"  class="form-control" />
              </div>
            <div class="m-contact-field col-md-6">
              <input type="text" name="company_name" class="form-control" id="inputCName" placeholder="Company">
            </div>
            <div class="m-contact-field col-md-6">
              <input type="text" name="name" class="form-control" id="q_name" placeholder="Name">
            </div>
            <div class="m-contact-field col-md-6">
              <input type="email" name="email" class="form-control" id="q_email" placeholder="Email">
            </div>
            <div class="m-contact-field col-md-6">
              <input type="text" name="phone" class="form-control" id="q_phone" placeholder="Phone">
            </div>
            <div class="m-contact-field col-md-12">
              <textarea rows="8"  cols="42" class="form-control" placeholder="Project Description" id="description" name="q_description" ></textarea>
            </div>
            <input type="hidden" name="contact_form_token" value="<?php echo  $_SESSION['session_token']; ?>" />
            
            <div class="m-contact-field col-md-6">
              <br>
                <input type="hidden" name="quote_form_token" value="<?php echo  $_SESSION['session_token']; ?>" />
                <input type="submit" value="Send Enquiry" name="submit" class="btn btn-primary" style="height: 45px;" />
                <br>
                <br>
                <br>
          </div> 
        </form>      
      </div>
    </div>
    </div>
    <?php include('footer.php') ?>
</div>
<!-- scripts -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/skrollr.js"></script>
<script type="text/javascript" src="assets/js/walkwel.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.js"></script>
<script type="text/javascript" src="assets/js/quote-validate.js"></script>
</body>
</html>
