
<?php
include'lib/load2.php';
$admin->enter_values(); 
?>
<script>
function login(){
	var fname = $('#First_Name').val();
	var lname = $('#Last_Name').val();
	var email = $('#Email').val();
	var pass = $('#Password').val();
	
	if(fname=="" || lname== "" || email=="" || pass==""){
	alert('Please Enter All field!');
	return false;
	}else{
	return true;
	}
}
</script>
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
					
					<div class="brand-bg">
                    <a class="navbar-brand" href="Frontpage.php"><img style="margin-top:-23px;padding-left:0px" src="assets/images/logo.png" alt="Freelancer Logo" /></a>
					</div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        
                        <li><a href="Frontpage.php">Home</a></li>
						 <li><a  href="javascript:void(0)">Candidates</a></li>
                        <li><a href="login.php">Organisation</a></li>
                        <li><a  href="javascript:void(0)">Opportunities</a></li>
						<li><a href="signup.php" style="color:red;">Sign Up</a></li>
                         <li><a href="login.php">Log In</a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
				
            </div><!-- /.container-fluid -->
        </nav>

		<header>
		<!-- <img src="assets/images/signup1.jpg" alt=""  style="width"/>-->
		</header>
		<section id="our-team" class="sections">
            <div class="container col-md-12">
			
			<div class ="col-md-6">
			<img src= "assets/images/orgimage.jpg" style ="height:60%" />
			</div>
			<div class ="col-md-4">
                <form method="post" action="" onsubmit="return login();" id="logn">
                <div class="form-group">
				 <label for="#">Organisation Name:*</label>
				<input type="text" class="form-control" id="org" name="org" placeholder="Your Organisation name">
				  </div>
				<div class="form-group">
				 <label for="#"> Representative First Name:*</label>
				<input type="text" class="form-control" id="First_Name" name="First_Name" placeholder="Your First Name">
				  </div>
				<div class="form-group">
				 <label for="#"> Representative Last Name:*</label>
				<input type="text" class="form-control" id="Last_Name" name="Last_Name" placeholder="Your Last Name">
				  </div>
				  <div class="form-group">
				 <label for="#"> Representative Email:*</label>
				<input type="email" class="form-control" id="Email" name="Email" placeholder="Your Email">
				  </div>
                  <div class="form-group">
				 <label for="#">Representative Job Role:*</label>
				<input type="text" class="form-control" id="role" name="role" placeholder="Your Job Role">
				  </div>
				  <div class="form-group">
				 <label for="#">Representative Phone:*</label>
				<input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number">
				  </div>
                  <div class="form-group">
				 <label for="#">Representative LinkedIN:*</label>
				<input type="email" class="form-control" id="linked" name="linked" placeholder="Your LinkedIN Account">
				  </div>
				  
				  <div class="form-group">
				 <label for="#">Representative Password:*</label>
				<input type="password" class="form-control" id="Password" name="Password" placeholder="Account Password">
				  </div>
				  <div class="form-group">
				 <label for="#"> Representative Confirm Password:*</label>
				<input type="password" class="form-control" id="conPassword" name="conPassword" placeholder="Confirm Account Password">
				  </div>
				 <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>
					</form>
				
				
				<!--<h3>Sign Up For Free</h3>
					<p>First Name:*<br></p>
					<input type="text" name="First_Name" id="First_Name">
					<p>Last Name:*<br></p>
					<input type="text" name="Last_Name" id="Last_Name"><br>
					<p>Email:*<br></p>
					<input type="email" name="Email"  id="Email"><br>
					<p>Password:*<br></p>
					<input type="password" name="Password"  id="Password"><hr></hr>
					<input type="submit" value="Login" name="submit"><br>
				</form> -->
            </div>
			<div class ="col-md-2"> </div>
			</div>
			<!-- /container -->       
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
							<p><a target="_blank" href="#"> Terms and Conditions </a>&nbsp;&nbsp;
                            <a target="_blank" href="#"> Privacy Policy </a>
                            </p>
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
