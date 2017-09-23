<?php
include'lib/load2.php';
if(isset($_SESSION["data"])){
	$all_data = $_SESSION["data"];
/* $skills=$admin->getskills(); */
$admin->create_adv(); 

?>
 <html class="no-js" lang="">
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
<div class="container">
  <h2>Vertical (basic) form</h2>
  <form  method="Post" action="" encytype="multipart/form-data">
    <div class="form-group">
      <label for="Advertisement Description">Advertisement Description":</label>
      <input type="text" class="form-control" id="adv_desc" placeholder="Enter description" name="adv_desc">
    </div>
    <div class="form-group">
      <label for="outcomes">Outcomes:</label>
      <input type="text" class="form-control" id="adv_outcomes" placeholder="Enter password" name="adv_outcomes">
    </div>
	<div class="form-group">
      <label for="Activities">Activities:</label>
      <input type="text" class="form-control" id="adv_activities" placeholder="Enter password" name="adv_activities">
    </div>
	<div class="form-group">
      <label for="outcomes">duration:</label>
      <input type="text" class="form-control" id="adv_duration" placeholder="Enter password" name="adv_duration">
    </div>
	<div class="form-group">
	
      <label for="outcomes">Skills:</label>
      <select class="form-control" id="select_skills" placeholder="Enter password" name="adv_duration">
			
				
					<option value="programer" >programer</option>
					<option value="Designer" >Designer</option>
					<option value="Manager" >Manager</option>
					
	  </select>
	  
	</div>
	<div class="form-group">
      <label for="outcomes">publish date:</label>
      <input type="date" class="form-control" id="adv_publish_date" placeholder="Enter password" name="adv_publish_date">
    </div>
	<div class="form-group">
      <label for="outcomes">Expiry date:</label>
      <input type="date" class="form-control" id="adv_expiry_date" placeholder="Enter password" name="adv_expiry_date">
    </div>
	<div class="form-group">
      <label for="outcomes">Job start date:</label>
      <input type="date" class="form-control" id="adv_start_date" placeholder="Enter password" name="adv_start_date">
      <input type="hidden" class="form-control" id="adv_start_date" placeholder="Enter password" name="org_id" value="1">
      <input type="hidden" class="form-control" id="adv_start_date" placeholder="Enter password" name="rep_id" value="1">
      <input type="hidden" class="form-control" id="adv_start_date" placeholder="Enter password" name="cat_id" value="1">
      <input type="hidden" class="form-control" id="adv_start_date" placeholder="Enter password" name="sk_id" value="1">
    </div>
	 <!--<div class="form-group">
      <label for="outcomes">Job start date:</label>
      <input type="text" class="form-control" id="adv_start_date" placeholder="Enter password" name="org_id">
    </div>
	<div class="form-group">
      <label for="outcomes">Job start date:</label>
      <input type="text" class="form-control" id="adv_start_date" placeholder="Enter password" name="rep_id">
    </div>
	<div class="form-group">
      <label for="outcomes">Job start date:</label>
      <input type="text" class="form-control" id="adv_start_date" placeholder="Enter password" name="cat_id">
    </div>
	<div class="form-group">
      <label for="outcomes">Job start date:</label>
      <input type="text" class="form-control" id="adv_start_date" placeholder="Enter password" name="sk_id">
    </div> -->
	
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <input type="submit" class="btn btn-default" name="submit">
  </form>
</div>

</body>
</html>
<?php 
}else{
	$admin->CheckLogin();
	}
?>