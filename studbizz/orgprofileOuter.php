<?php
include 'admin.php';
if(isset($_SESSION["data"])){
$all_data = $_SESSION["data"];
$us_id = $all_data['id'];
$data = $admin->org_profile_outer($us_id);

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
        
	
<div class ="container  col-md-12 text-success" style="height:50%; margin-top:290px; margin-left:">
<div class = "col-md-3"><img src="assets/images/abcdef.jpg" / style="width: 100%"></div>
<div class ="col-md-5 text-uppercase" style="height:0%; margin-top:50px;"> <h4> ORGANISATION NAME:<h4><?php echo $data[org_name]; ?> </div>
<div class ="col-md-3"  style="margin-left:70%">
<h4>CONTACT DETAILS:</h4> 
<span class="glyphicon glyphicon-globe" style="height:20%"> <?php echo $data[org_phn_no]; ?></span><br />
<span class="glyphicon glyphicon-earphone" style="height:20%"> <?php echo $data[org_location];  ?></span><br />
<span class="glyphicon glyphicon-screenshot" style="height:20%"> <?php echo $data[email];  ?></span>
</div>

</div>
<div class= "container col-md-12 " style= "margin-top:64%; margin-left:590px">
<div style="margin-left: -250px; margin-top: -320px;"><h4> DESCRIPTION:</h4><?php echo $data[org_desc];  ?></div>
</div>



<?php 
//include'footer.php';

}else{
	$admin->CheckLogin();
	}
?>


