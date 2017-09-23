<?php
include'lib/load2.php';
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
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <a class="navbar-brand" href="Frontpage.php"><img src="assets/images/logo.png" alt="Freelancer Logo" /></a>
					</div>
                </div>
                <!--<img src="assets/images/logo2.png" alt="Freelancer Logo" />

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
							
                           <li><a href="Frontpage.php" >Home</a></li>
                        <li><a href="javascript:void(0)">Candidates</a></li>
                        <li><a href="login.php">Organisations</a></li>
                        <li><a href="javascript:void(0)">Opportunities</a></li>
                       
						
						<?php if(isset($_SESSION["data"])){?>
									<li><a href="logout.php"> Logout</a>
						<?php 		}else{ ?>

                        <li><a href="signup.php">Sign Up/</a></li>
                        <li><a href="login.php">LOg In</a></li>
                        <?php } ?>
                    </ul>
                </div><!-- /.navbar-collapse -->
				</div>
				
            </div><!-- /.container-fluid -->
        </nav>

    
       
        <header class="home-bg">
		<div class="overlay-img">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="header-details">
							<h1>A platform for<br>  organizations <br/> to develop talent</h1>
							<p>Industry experience and skills before graduation.</p>
							<button class="btn btn-default">Read More</button>
						</div>
					</div>
					

				</div>
			</div>
		</div>	
        </header>

        <!-- Sections -->
        <section id="promotion-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Goal<br> of Studbiz</h1>
						<p>The main purpose of making our website is to bring together interested business associates and graduates</p>
						<a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
						
						</div>
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Information<br>for Candidates</h1>
						<p>You’re safe with us. The privacy and security of your profiles is our top priority.</p>
						<a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
						
						</div>
					</div>
					
					<div class="col-sm-4 col-sm-12 col-xs-12">
						<div class="promotion">
						
						<h1>Information<br> for Organisations</h1>
						<p>You’re safe with us. The privacy and security of your financial and institutional information is our top priority.</p>
						<a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
        </section>
		
		
		<section id="portfolio-area" class="sections">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
					<div class="col-sm-6 col-sm-12 col-xs-12">
						<div class="portfolio">
							<img src="assets/images/computer.png" alt="" />
						</div>
					</div>
					
					<div class="col-sm-5 col-sm-12 col-xs-12">
						<div class="portfolio">
						
						<div class="item">
						<h1>Portfolio: More about Studbiz</h1>
						<h5>We are small, but strong team</h5>
						<p>The same debit card you use to buy coffee lets deposit money straight to your bank account.</p>
						<p>You’re safe with us. The privacy and security of your financial information is our top priority.</p>
						<a href="#"><h4>more<span><i class="fa fa-long-arrow-right"></i></span></h4></a>
						</div>
						
						</div>
					</div>

                </div>
            </div> <!-- /container -->       
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
								<h2>Mani</h2>
								<h5>Web Developerr</h5>
								<p>Coffee lover.  Always on bike. iPhone fan.</p>
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
