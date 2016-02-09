<?php 
error_reporting(0);
session_start();
if($_SESSION['frm_tkn_id']=='')
{
  $token = md5(uniqid(rand(),true));
  $_SESSION['frm_tkn_id']=$token;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacts | Walkwel Technology</title>
  
  <!-- favicon -->
  <link rel="icon" href="favicon.png" type="image/png"> 
  
  <!-- fonts links -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,300|Open+Sans:400,300,600' rel='stylesheet'>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <!--- styles css --->
  <link href="assets/css/style.css" rel="stylesheet">
      <!------------- jqueyr file -------------->
<script src="assets/js/jquery-1.11.0.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</head>

<body>

<!-------------- header start ------------->
  <header>
      <nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="assets/img/walkwel-logo.jpg" alt="walkwel logo"></a>
                    <div class="mobileSocailLink">
          <ul>
            <li><a href="https://www.facebook.com/walkwel" target="_blank" style="padding-right:6px;"><img src="assets/img/socialMedia/fb.jpg" alt="fb" /></a></li>
            <li><a href="https://twitter.com/walkwel" target="_blank" style="padding-left:0;"><img src="assets/img/socialMedia/tw.jpg" alt="tw" /></a></li>
          </ul>
    </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About Us</a></li>
        <li><a href="solutions.html">Solutions</a></li>
        <li><a href="jobs.php">Jobs</a></li>
        <li><a href="contactUs.html" class="activeMenu">Contact Us</a></li>
        <li><a href="https://www.facebook.com/walkwel" target="_blank" style="padding-right:6px;" id="fb"><img src="assets/img/socialMedia/fb.jpg" alt="fb" /></a></li>
        <li><a href="https://twitter.com/walkwel" target="_blank" style="padding-left:0;" id="tw"><img src="assets/img/socialMedia/tw.jpg" alt="tw" /></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>


<!-- Banner -->
  <div class="container-fluid" style="padding:0;">
     <div class="positionRelative">
       <img src="assets/img/banner1.jpg" class="img-responsive" alt="" />
        <div class="bannerText1 container">
          <h1 class="subtitle fancy" style="margin:11% 0 0"><span>CONTACT US</span></h1> 
          <h3 class="text-center">We'd &lt;3 to hear from you</h3>    
        </div>
     </div>      
  </div>
  
  
  <div style="padding:0 15px;" class="container">
   <h3 class="topContentText text-center">Send us anything on your mind. Anything except a...
resulting in bad luck</h3>
   <hr>
 </div>
 
 
 <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 responsiveWidth" style="background:#f1f1f1; padding:30px 0 0; width:30%;">
        <div class="text-center">
          <img src="assets/img/phone-icon.png" alt="" />
           <h1 style="font-size:24px; margin:10px 0 0;">Call us</h1>
           <p style="font-size:16px; font-weight:400; margin-bottom:30px;">+91-181-5041414</p>
        </div>
        
        <div class="text-center">
            <a href="mailto:info@walkwel.in"><img src="assets/img/email-icon.png" alt="" /></a>
           <h1 style="font-size:24px; margin:10px 0 0;">Drop us an email</h1>
           <p style="font-size:16px; font-weight:400; margin-bottom:30px;">info@walkwel.in</p>
        </div>
       <div class="text-center positionRelative">
        <img src="assets/img/map.jpg" class="img-responsive" alt="" />
        <div class="positionAbsolute getDirection"><a href="https://www.google.co.in/maps/dir//Walkwel+Technology,+4th+floor,+PKF+Building,+Namdev+Chowk,+Jalandhar,+Punjab+144001/@31.321565,75.582214,17z/data=!4m13!1m4!3m3!1s0x391a5bc9b0000025:0x7b5c8237ff0eca89!2sWalkwel+Technology!3b1!4m7!1m0!1m5!1m1!1s0x391a5bc9b0000025:0x7b5c8237ff0eca89!2m2!1d75.582214!2d31.321565" target="_blank"><img src="assets/img/getDirection.png" alt="" /></a></div>
      </div>
        
      </div>
      
 <div class="col-md-8 col-sm-8 col-xs-12 pull-right">
             <div class="login-box">
             <?php
                  if ( isset($_GET['success']) && $_GET['success'] == 1 )
                  {
                ?>
                <div class="page-alerts">
                    
                    <div id="alert-5" class="alert alert-success page-alert" style="">
                        <button class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <strong>Cool!</strong> <?php echo "Message has been succefully sent !";?>
                    </div>
                </div>
                <?php
                  }
                    else if(isset($_GET['error']) && $_GET['error'] == 1)
                  {
                ?>
              <div class="page-alerts">
                <div id="alert-4" class="alert alert-danger page-alert" style="">
                      <button class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                      <strong>Error!</strong> <?php echo "Message Not sent. Please try again.";?>
                  </div>
                </div>
                <?php
                  }
                  
                ?>
              
                <form action="contact_us.php" method="post" name="message" id="message">
                    <legend>Fill the form below</legend>
                    <div class="form-group">
                        <label for="name">Name *</label>
                        <input value='' id="contact_name" name="contact_name" placeholder="Name" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="organisaion*">Organisaion *</label>
                        <input id="contact_organisaion" name="contact_organisaion" value='' placeholder="Organisaion" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="contact_phone" name="contact_phone" value='' placeholder="Phone" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input id="subject" name="subject" value='' placeholder="Subject" type="text" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" style="min-height:120px;" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                     <input type="hidden" name="token" value="<?php echo $_SESSION['frm_tkn_id']; ?>" placeholder="">
                        <input type="submit" name="contact_us" id="contact_us" class="btn btn-own" style="font-weight: 300; color: rgb(255, 255, 255); font-size: 20px;" value="Send Message" />
                    </div>
                </form>
            </div>
 </div>     
      
      
 </div>
</div>       
 




 <!--footer --> 
 <div class="container-fluid" style="padding:0">
   <div id="footer" style="overflow: hidden; padding-bottom: 8px; height:auto;">
        <div class="col-md-6 text-center">
              <h1>Jalandhar Office</h1>
              <p>4th Floor, PKF Building, Namdev Chowk, Jalandhar (PB).</p>
            </div>
            <div class="col-md-6 text-center">
              <h1>Banglore Office</h1>
               <p>Plot 50, 9th Main, BTM 1st Stage, Bangalore 560059, India</p>
            </div>
   </div>
   <footer><p class="text-center">Copyright 2015 Walkwel Technology Private Ltd. All rights reserved.</p></footer>
 </div>    


  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript">
  $(document).ready(function()
  {
    //alert('hello');
    $('.page-alerts').fadeOut(4000);
  });
</script>
</body>
</html>
