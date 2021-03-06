<?php include_once('token.php'); ?>
<div class="overlay animate"></div>
<div id="request" class="animate">
	<div class="container21">
    	<div class="container">
            <div class="main-heading" style="padding-bottom:10px; padding-top:10px;">
        	   <h3 class="text-center">Let's work together</h3>
            </div>
            <div class="form">
                <form method="post" id="quote-form" action="quote-email.php">
                    <div class="form-content">
                        <fieldset>
                            <div class="col-md-5 text-right">
                                <label>What Solution are you looking for ?</label>
                            </div>
                            <div class="col-md-7">
                                <select class="form-control">
                                    <option value="1">Web</option>
                                    <option value="2">Software</option>
                                    <option value="3">Mobile</option>
                                    <option value="4">Design</option>
                                    <option value="5">IT Counsulting</option>
                                </select>
                            </div>
                            <div class="col-md-5 text-right">
                                <label for="currency">What is your budget for the project ?</label>
                            </div>
                            <div class="col-md-2">
                                <select name="currency" id="currency" class="form-control">
                                    <option value="1">INR</option>
                                    <option value="2">US Dollar</option>
                                </select>
                            </div>  
                            <div class="col-md-5">
                                <input name="amount" class="form-control" placeholder="Enter Amount" />
                            </div>  
                            <div class="col-md-5 text-right">
                                <label>Your Name</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="name" class="form-control" id="q_name" placeholder="">
                            </div>  
                            <div class="col-md-5 text-right">
                                <label>Your Company name</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="company_name" class="form-control" id="inputCName" placeholder="">
                            </div> 
                            <div class="col-md-5 text-right">
                                <label >Email Address</label>
                            </div>
                            <div class="col-md-7">
                                <input type="email" name="email" class="form-control" id="q_email" placeholder="">
                            </div>  
                            <div class="col-md-5 text-right">
                                <label >Phone Number</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="phone" class="form-control" id="q_phone" placeholder="">
                            </div>  
                            <div class="col-md-5 text-right">
                                <label>Message</label>
                            </div>
                            <div class="col-md-7">
                              <textarea class="form-control" placeholder="Project Description" id="description" name="q_description" ></textarea>
                            </div> 
                            <div class="col-md-12">
                            </div>
                            <input type="hidden" name="quote_form_token" value="<?php echo  $_SESSION['session_token']; ?>" />
                            <div class="col-sm-offset-5 col-sm-2 text-center">
                              <input type="submit" value="Submit" name="submit" class="btn btn-default w-quote-button"/>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    	<a class="cancel"><i class="fa fa-times"></i></a>
    </div>
</div>
<div id="contact" class="animate">
    <div class="container21">
        <div class="container">
            <div class="main-heading" style="padding-bottom:10px; padding-top:10px;">
               <h3 class="text-center">Contact Us</h3>
            </div>
            <div class="form">
                <form method="post" id="contactq-form" action="quote-email.php">
                    <div class="form-content">
                        <fieldset>
                            
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Your Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" id="q_name1" placeholder="">
                                     <input type="hidden" class="form-control" name="solution" value="<?php echo $page; ?>">
                                </div> 
                            </div> 
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label>Email Address</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" id="q_email1" placeholder="">
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label >Phone Number</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="phone" class="form-control" id="q_phone1" placeholder="">
                                </div> 
                            </div> 
                            <div class="row">
                                <div class="col-md-3 text-right">
                                    <label >Message</label>
                                </div>
                                <div class="col-md-9">
                                  <textarea class="form-control" placeholder="Your Message" id="description1" name="q_description" ></textarea>
                                </div> 
                            </div>
                            <div class="col-md-12">&nbsp;
                            </div>
                            <input type="hidden" name="quote_form_token" value="<?php echo  $_SESSION['session_token']; ?>" />
                            <div class="col-sm-offset-5 col-sm-2 text-center">
                              <input type="submit" value="Submit" name="submit" class="btn btn-default w-quote-button"/>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
        <a class="cancel"><i class="fa fa-times"></i></a>
    </div>
</div>
<div id="header" class="headerStick"  data-0="background:rgba(0, 0, 0, 0.2)" data-100="background:rgba(255, 66, 57, 0.8)">
    <div class="logo">
        <a href="index.html"  data-0="width:260px;" data-100="width:60px;"
        ><img src="assets/img/logo.png" alt="Walkwel Technology Logo" title="Walkwel Technology Logo" /></a>
    </div>
    <div class="quote">
        <a class="req-quote">Quote</a>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="index.html" rel="Welcome to Walkwel Technology Private Limited" title="Welcome to Walkwel Technology Private Limited">Home</a></li>
            <li><a href="about-walkwel.html" rel="About Walkwel" title="About Walkwel">About Us</a></li>
            <li><a id="showTop" title="Walkwel Services" rel="Walkwel Services" href="solutions.html">Solutions</a></li>
            <li><a id="showCareer" href="#" title="Careers in Walkwel" rel="Careers in Walkwel">Career &nbsp;<i class="fa fa-caret-down"></i></a>
                 <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top port-menu" >
                    <div class="block" style="width:458px;">
                       <img src="img/portfolioimage.jpg" alt="">
                    </div>
                    <div class="block" style="width:36%;">
                        <h4 style="text-align: left; padding-left: 25px; margin-bottom: 10px;"> <i class="fa fa-coffee"></i> &nbsp;Why work at Walkwel </h4>
                        <h6 style="text-align: left; font-size:16px; padding-left: 25px; margin-bottom: 10px;">How about transforming into a digi-ninja!!!!</h6>
                        <p class="text-left" style="padding: 0px 25px;">A cheerful friendly character, with dogged determination, dedication to perfection &amp; loads of passion for tech. A right mix of these ingredients form the mythical Ninja. We invite anyone who possesses these inherent traits to join us.

                        </p>
                    </div>
                    <div class="block" style="width:30%;">
                        <h4 style="text-align: left; padding-left: 25px; margin-bottom: 10px;"> <i class="fa fa-birthday-cake"></i> &nbsp;Benefits </h4>
                        <ul class="work-benefits">
                            <li>Competitive salary</li>
                            <li>Holiday increases according to length of service</li>
                            <li>Smart casual dress code</li>
                            <li>Regular staff nights out</li>
                        </ul>
                        <a class="animated-btn animated-btn-1 menu-animated-btn" href="careers-in-walkwel.php" tabindex="-1"><svg>
                <rect height="100%" width="100%" fill="none" y="0" x="0"/>
            </svg>View All Jobs</a>
                    </div>
                </nav>
            </li>
            <li><a href="#" id="" title="Walkwel Portfolio" rel="Walkwel Portfolio">Our Portfolio &nbsp;<i class="fa fa-caret-down"></i></a>
                 <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top port-menu" >
                    <div class="block" style="width:458px;">
                       <img src="img/portfolioimage.jpg" alt="">
                    </div>
                    <div class="block" style="width:22%;">
                       <a href="web-development.html" title="walkwel web development"><h4>Web Development</h4></a>
                       <p>Progressively fashion catalysts for change after functional unities.</p>
                        <a class="animated-btn animated-btn-1 menu-animated-btn" href="web-development.html" style="margin: 0px auto ! important; float: none ! important;" title="walkwel web development" rel="walkwel web development" tabindex="-1">
                        <svg>
                           <rect height="100%" width="100%" fill="none" y="0" x="0"/>
                         </svg>View Portfolio
                        </a>
                    </div>
                    <div class="block" style="width:22%;">
                        <a href="erp-solutions.html"><h4>ERP Solutions</h4></a>
                       <p>Progressively fashion catalysts for change after functional unities.</p>
                       <a class="animated-btn animated-btn-1 menu-animated-btn" href="erp-solutions.html" title="Walkwel erp solutions" rel="walkwel erp solutions"  style="margin: 0px auto ! important; float: none ! important;" title="walkwel web development" rel="walkwel web development" tabindex="-1">
                        <svg>
                           <rect height="100%" width="100%" fill="none" y="0" x="0"/>
                         </svg>View Portfolio
                        </a>
                    </div>
                    <div class="block" style="width:22%; background:#f2f2f2;height: auto;padding-bottom: 40px;">
                         <a href="e-commerce-solutions.html"><h4>E-Commernce</h4></a>
                       <p>Progressively fashion catalysts for change after functional unities.</p>
                        <a class="animated-btn animated-btn-1 menu-animated-btn" href="e-commerce-solutions.html" title="Walkwel e-commerce solutions" rel="Walkwel e-commerce solutions" style="margin: 0px auto ! important; float: none ! important;" title="walkwel web development" rel="walkwel web development" tabindex="-1">
                        <svg>
                           <rect height="100%" width="100%" fill="none" y="0" x="0"/>
                         </svg>View Portfolio
                        </a>
                    </div>
                </nav>
            </li>
            <li><a href="contact-walkwel.html" title="Contact Walkwel" rel="Contact Walkwel">Contact</a></li>
        </ul>
    </div>
</div>
<div data-role="mobile" class="headerStick">
    <div class="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt="Walkwel Technology Logo" title="Walkwel Technology Logo" width="260" height="75" /></a>
    </div>
    <div class="quote">
        <a onclick="openMenu();">Menu</a>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="index.html" rel="Welcome to Walkwel Technology Private Limited"  title="Welcome to Walkwel Technology Private Limited">Home</a></li>
            <li><a href="about-walkwel.html" rel="About Walkwel" title="About Walkwel">About Us</a></li>
            <li><a  title="Walkwel Services" rel="Walkwel Services" href="solutions.html">Solutions</a></li>
            <li class="dropdown-mymenu"><a  title="Walkwel Portfolio" rel="Walkwel Portfolio" href="#">Portfolio&nbsp;<i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-submenu" style="display:none;">
                    <li><a href="web-development.html">Web Development</a></li>
                    <li><a href="erp-solutions.html">ERP Solutions</a></li>
                    <li><a href="e-commerce-solutions.html">E-Commerce</a></li>
                </ul>
            </li>
            <li><a href="careers-in-walkwel.html" title="Careers in Walkwel" rel="Careers in Walkwel">Career</a></li>
            <li><a href="contact-walkwel.html" title="Contact Walkwel" rel="Contact Walkwel">Contact</a></li>
        </ul>
    </div>
</div>