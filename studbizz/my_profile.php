<?php
include 'admin.php';
if(isset($_SESSION["data"])){
$all_data = $_SESSION["data"];
$us_id = $all_data['id'];
$data = $admin->user_profile($us_id);
//print_r($data);die;
?>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
        
            <div class="container">
			
			<div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>-->
					
					
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                
				</div>
				
            </div><!-- /.container-fluid -->
        </nav>

        <!--Home page style-->
        
	
<div class ="container  col-md-12 text-success" style="height:50%; margin-top:10px; margin-left:30px">
<div class = "col-md-3"><img src="assets/images/abcdef.jpg" /></div>

<div class ="col-md-5 text-uppercase"> <h4>First NAME:<?php echo $data[name]; ?> <h4></div>

<div class ="col-md-3" >
<h4>Email</h4> 
<span class="glyphicon glyphicon-globe" style="height:20%"> <?php echo $data[email]; ?></span><br />
</div>

</div>




<?php 
//include'footer.php';

}else{
	$admin->CheckLogin();
	}
?>


