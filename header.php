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
                    <!-- 
                	<div class="form-content">
                    	<h1 class="text-center">What service are you looking for ?</h1>
                    	<fieldset>
                          <div class="col-md-3">                 
                            <input type="checkbox" id="erp_solution" name="erp_solution" value="ERP Solution" />
                            <label>ERP Solution</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" id="website" name="website" value="Website"/>
                            <label>Website</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" id="bus_solution" name="bus_solution" value="Business Solution"/>
                            <label>Business Solution</label>
                        </div>
                        <div class="col-md-3">
                            <input type="checkbox" id="seo" name="seo" value="SEO"/>
                            <label>SEO</label>
                        </div>
                        </fieldset>
                    </div>
                    <div class="form-content">
                      <h1 class="text-center">2. What type of website solution are you looking for ?</h1>
                      <fieldset>
                          <div class="col-md-3">
                          <input type="checkbox" name="cms" value="CMS" />
                            <label>CMS</label>
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" name="e_commerce" value="E-Commerce"/>
                            <label>Ecommerce</label>
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" name="apps" value="Apps"/>
                            <label>Apps</label>
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" name="development" value="Development"/>
                            <label>Development</label>
                            </div>
                        </fieldset>
                    </div> 
                    <div class="form-content">
                    	<h1 class="text-center">What is your budget for the project ?</h1>
                        <fieldset>
                            <div class="col-md-3">
                            <input type="radio" name="budget" value="25,000 - 50,000" />
                            <label>25,000 - 50,000</label>
                            </div>
                            <div class="col-md-3">
                            <input type="radio" name="budget" value="50,000 to 1,00,000" />
                            <label>50,000 to 1,00,000</label>
                            </div>
                            <div class="col-md-3">
                            <input type="radio" name="budget" value="1,00,000 to 5,00,000"/>
                            <label>1,00,000 to 5,00,000</label>
                            </div>
                            <div class="col-md-3">
                            <input type="radio" name="budget" value="5,00,000+" />
                            <label>5,00,000 +</label>
                            </div>
                        </fieldset>
                    </div>
                    -->
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
<div id="header" class="headerStick"  data-0="background:rgba(0, 0, 0, 0.2)" data-100="background:rgba(218, 107, 29, 0.8)">
    <div class="logo">
        <a href="index.html"  data-0="width:260px;" data-100="width:60px;"
        ><img src="assets/img/logo.png" alt="Walkwel Technology" title="Walkwel Technology" /></a>
    </div>
    <div class="quote">
        <a class="req-quote">Quote</a>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about-walkwel.html">About Us</a></li>
            <li><a id="showTop" href="solutions.html">Solutions &nbsp;<i class="fa fa-caret-down"></i></a>
                <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="cbp-spmenu-s3">
                    <div class="navigation21">
                        <div class="block">
                            <h4> Web Design </h4>
                            <p>
                                Following is the set of yarns we use to spin the web.
                            </p>
                        </div>
                        <div class="block">
                            <h4>Web Development</h4>
                            <p>
                            List of our “Soft”ware solutions that punch “Harddd”!!!
                            </p>
                        </div>
                        <div class="block">
                            <h4>Mobile Apps</h4>
                            <p>
                                Your ideas &amp; our apps "A match made in <span style="text-decoration: line-through;">Heaven</span> Walkwel"
                            </p>
                        </div>
                        <div class="block">
                            <h4>SEO</h4>
                            <p>
                                We love to add colour to a canvas as long as it is digital.
                            </p>
                        </div>
                        <div class="block">
                            <h4>Custom Software</h4>
                            <p>
                                To help you become a better juggler of tasks. 
                            </p>
                        </div>
                        <div class="block">
                            <h4>Testing</h4>
                            <p>
                                To help you become a better juggler of tasks. 
                            </p>
                        </div>
                        <div class="block">
                            <h4>Integration</h4>
                            <p>
                                To help you become a better juggler of tasks. 
                            </p>
                        </div>
                        <div class="block">
                            <h4>E-commerce Solutions</h4>
                            <p>
                                To help you become a better juggler of tasks. 
                            </p>
                        </div>
                        <div class="block">
                            <h4>Outsourcing</h4>
                            <p>
                                To help you become a better juggler of tasks. 
                            </p>
                        </div>
                    </div>
                </nav>
            </li>
            <li><a id="showCareer" href="Career.html">Career &nbsp;<i class="fa fa-caret-down"></i></a>
                <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top" id="career-menu">
                    <div class="block" style="width:38%;">
                        <h4> <i class="fa fa-coffee"></i> &nbsp;Why work at Walkwel </h4>
                        <h6>How about transforming into a digi-ninja!!!!</h6>
                        <p>A cheerful friendly character, with dogged determination, dedication to perfection &amp; loads of passion for tech. A right mix of these ingredients form the mythical Ninja. We invite anyone who possesses these inherent traits to join us on this epic journey to become “Staff of Legends”….

                        </p>
                    </div>
                    <div class="block" style="width:30%;">
                        <h4> <i class="fa fa-birthday-cake"></i> &nbsp;Benefits </h4>
                        <ul class="work-benefits">
                            <li>Competitive salary</li>
                            <li>Holiday increases according to length of service</li>
                            <li>Smart casual dress code</li>
                            <li>Regular staff nights out</li>
                        </ul>
                    </div>
                    <div class="block" style="width:30%; background:#f2f2f2; border:1px solid #ddd;height: auto;padding-bottom: 40px;">
                        <h4><i class="fa fa-bullhorn"></i> &nbsp;Current Vacancies</h4>
                        <a href="Analytics.html">Analytics</a>
                        <a href="PHP.html">PHP Developer</a>
                        <a href="Designer.html">Front End Designers</a>
                        <a href="Apps.html">Apps Developer (Android / IOS)</a>
                        <a href="JVM.html">Java Virtual Machine Developer ( JVM )</a>
                        <a href="Career.html" class="call-to-action btn">View All Jobs</a>
                    </div>
                </nav>
            </li>
            <li><a href="Portfolio.html" id="">Our Portfolio &nbsp;<i class="fa fa-caret-down"></i></a>
                 <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top port-menu" >
                    <div class="block" style="width:458px;">
                       <img src="img/portfolioimage.jpg" alt="">
                    </div>
                    <div class="block" style="width:22%;">
                       <a href="web-development.html"><h4>Web Development</h4></a>
                       <p>Progressively fashion catalysts for change after functional unities.</p>
                       <a href="web-development.html" class="view-port">View Portfolio</a>
                    </div>
                    <div class="block" style="width:22%;">
                        <a href="erp-solutions.html"><h4>ERP Solutions</h4></a>
                       <p>Progressively fashion catalysts for change after functional unities.</p>
                       <a href="erp-solutions.html" class="view-port">View Portfolio</a>
                    </div>
                    <div class="block" style="width:22%; background:#f2f2f2;height: auto;padding-bottom: 40px;">
                         <a href="e-commerce-solutions.html"><h4>E-Commernce</h4></a>
                       <p>Progressively fashion catalysts for change after functional unities.</p>
                       <a href="e-commerce-solutions.html" class="view-port">View Portfolio</a>
                    </div>
                </nav>
            </li>
            <li><a href="Contact.html">Contact</a></li>
        </ul>
    </div>
</div>
<div data-role="mobile" class="headerStick">
    <div class="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt="Walkwel-logo" title="Walkwel Technology" width="260" height="75" /></a>
    </div>
    <div class="quote">
        <a onclick="openMenu();">Menu</a>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="About.html">Company</a></li>
            <li><a href="Services.html">Solutions</a></li>
            <li><a href="Career.html">Career</a></li>
            <li><a href="contactUs.html">Contact</a></li>
        </ul>
    </div>
</div>