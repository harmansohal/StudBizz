 <?php
include'lib/load2.php';
$admin->create_org();
if(isset($_SESSION["data"])){
	$all_data = $_SESSION["data"];

?>
 <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/opensans-web-font.css" />
        <link rel="stylesheet" href="assets/css/montserrat-web-font.css" />

		<!--For font-awesome css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <style>
        #success_message{ display: none;}
		</style>
<!-- 	<script type = "text/javascript">
       function validateForm(organisation_name) {
        if (/^(?:[-A-Z]+\.? )+[-A-Z]+$/i.validateForm(organisation_name)) {
		alert("Please fill alphabetic characters only.");
            return false;
		   }
	</script>  -->

  </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <nav class="mainmenu navbar navbar-default navbar-fixed-top">
            <div class="container">
			
			<div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					
					<div class="">
                    <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Freelancer Logo" /></a>
					</div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        
                     <li><a href="Frontpage.php" >Home</a></li>
						 <li><a href="javascript:void(0)">Graduates</a></li>
                          <li><a href="opportunities.php">Opportunities</a></li>
                        <li><a href="index.php" style="color:red;">Organisations</a></li>
                        <li><a href="javascript:void(0)">About Us</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
				
            </div><!-- /.container-fluid -->
        </nav>

		<header>
		<img src="assets/images/org.jpg" alt=""  style="width:100% ; height:85%"/>
		</header>
					
		<section id="our-team" class="sections">
		 <li>
            
			<div class="container col-md-12">
			<div class ="col-md-1">		
			 </div>
			 <div class ="col-md-10">		
<div class="container">

    <form name="myForm" class="well form-horizontal" action="dashboard.php" method="post"  id="contact_form" onsubmit="return validateForm()">
	
<fieldset>

<!-- Form Name -->
<legend>Organisation Detail</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Organisation Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="text"  name="organisation_name" required placeholder="Organisation Name" class="form-control"  type="text">
  <input type="hidden" class="form-control" id="" name="main_user" value="<?php echo $all_data['id']; ?>">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Organisation Discription</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
   <textarea class="form-control" name="org_desc" required placeholder="Organisation Discription"></textarea>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="email" name="email" required placeholder="Enter valid E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input type="text" name="phone"   required placeholder="(845)555-1212" class="form-control" >
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" required placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" required placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
   	<select required name="state" class="form-control selectpicker">
     <option value="">Please select your state</option>
     <option value="NSW">NSW</option>
     <option value="Westren Australia">Westren Australia</option>
     <option value="South Australia">South Australia</option>
     <option value="Queensland">Queensland</option>
     <option value="Victoria">Victoria</option>
     <option value="Tasmania">Tasmania</option>
    </select>
   </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" required placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

    <!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Website Name</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="website" required pattern="https?://.+" placeholder="Enter valid website Name" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->    	
  </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit </button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
       
  </div>
     </div> 
			
		<div class ="col-md-1">		
			 </div><!-- /container -->       
        </section>
       		
		<section id="our-team" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
						<div class="team-heading">
							<h1>Our Team</h1>
							<p>They are big but still friendly.</p>
						</div>
				
				<div class="team-member">
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="team">
							<img src="assets/images/IMG.jpg" alt="" />
							<div class="team-info">
								<h2>Deepa</h2>
								<h5>Web Developer</h5>
								<p>Coffee lover.  Always on bike. iPhone fan.</p>
							</div>
						</div>	
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="team">
							<img src="assets/images/IMG.jpg" alt="" />
							<div class="team-info">
								<h2>Harman</h2>
								<h5>Web Developer</h5>
								<p>Coffee lover.  Always on bike. iPhone fan.</p>
							</div>
						</div>	
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="team">
							<img src="assets/images/IMG.jpg" alt="" />
							<div class="team-info">
								<h2>Mani</h2>
								<h5>Web Developerr</h5>
								<p>Coffee lover.  Always on bike. iPhone fan.</p>
							</div>
							</div>
						</div>	
					</div>
					
					<div class="team-more">
						<a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
					</div>
					
				</div>	
					
				</div>
                
            </div> <!-- /container -->       
        </section>
		
		<div class="scroll-top">
		
			<div class="scrollup">
				<i class="fa fa-angle-double-up"></i>
			</div>
			
		</div>
	
        <!--Footer-->
        <footer>
            <div class="container">
			<hr>
            	<div class="row">
				
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="social-network">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
					
            		<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="copyright">
							<p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> StdBiz </a>2017. All rights reserved.</p>
						</div>
					</div>
					
            	</div>
            </div>
        </footer>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
	<?php 
}else{
	$admin->CheckLogin();
	}
?>
