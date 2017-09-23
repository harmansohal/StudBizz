<?php
include'lib/load2.php';
$admin->create_org();
if(isset($_SESSION["data"])){
	$all_data = $_SESSION["data"];
$data = $admin->check_org_profile($all_data);
$p_idd = $all_data[id];
$p_data = $admin->user_profile($p_idd);

?>
<!DOCTYPE html>
<html>
<title>Dashboard </title>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- form css links -->

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
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.form-group{
	    display: inline-block;
}
</style>

<script type="text/javascript">
function getXmlObject()
{
 var xmlobj=false;
 try
 {
   xmlobj= new XMLHttpRequest();
 }
 catch(e)
 {
    try
	{
	  xmlobj=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  catch(e1)
	  {
	    try
		{
		  xmlobj=new ActiveXObject("MSXML.XMLHTTP");
		}
		catch(e2)
		{
		 alert("xmlobj object cannot create.");
		}
	  }
	}
 return xmlobj;
}
function showEmail(str)
{
 xmlobj=getXmlObject();
 xmlobj.onreadystatechange=function()
    {
    if(xmlobj.readyState==4 && xmlobj.status==200)
	{
	  document.getElementById('myDiv').innerHTML=xmlobj.responseText;
	}
	}
	xmlobj.open("GET","dashboard.php?aid="+str,true);
	xmlobj.send();
}
function validation(org_reg)
{
 if(document.getElementById('org_name').value=="")
 {
  alert("Please enter Your Organisation Name");
  document.getElementById('org_name').focus();
  return false;
 }
 if(document.getElementById('org_desc').value=="")
 {
  alert("Please enter Your Organisation Description.");
  document.getElementById('org_desc').focus();
  return false;
 }
 if(document.getElementById('email').value=="")
 {
  alert("Please enter Your Email Id");
  document.getElementById('email').focus();
  return false;
 }
 // test if valid email address, must have @ and .
var checkEmail = "@.";
var checkStr = org_reg.email.value;
var EmailValid = false;
var EmailAt = false;
var EmailPeriod = false;
for (i = 0;  i < checkStr.length;  i++)
{
ch = checkStr.charAt(i);
for (j = 0;  j < checkEmail.length;  j++)
{
if (ch == checkEmail.charAt(j) && ch == "@")
EmailAt = true;
if (ch == checkEmail.charAt(j) && ch == ".")
EmailPeriod = true;
	  if (EmailAt && EmailPeriod)
		break;
	  if (j == checkEmail.length)
		break;
	}
	// if both the @ and . were in the string
if (EmailAt && EmailPeriod)
{
		EmailValid = true
		break;
	}
}
if (!EmailValid)
{
alert("The \"email\" field must contain an \"@\" and a \".\".");
org_reg.email.focus();
return (false);
}
 if(document.getElementById('org_phn_no').value=="")
{
  alert("Please enter your phone number");
  document.getElementById("org_phn_no").focus();
  return false;
}
if(document.getElementById('org_phn_no').value!="")
 {
	if(isNaN(document.getElementById('org_phn_no').value))
	{
	alert("Please Enter Only Numbers");
	document.getElementById("org_phn_no").focus();
	return false;
	}
	if(document.getElementById('org_phn_no').value.length<10)
	{
	alert("Please Enter Atleast 10 Digits");
	document.getElementById("org_phn_no").focus();
	return false;
	}
	}
 if(document.getElementById('org_location').value=="")
 {
  alert("Please enter Your Address");
  document.getElementById('org_location').focus();
  return false;
 }
 if(document.getElementById('city').value=="")
 {
  alert("Please enter Your city");
  document.getElementById('city').focus();
  return false;
 }
 if(document.getElementById('zip').value=="")
 {
  alert("Please enter Your zip");
  document.getElementById('zip').focus();
  return false;
 }
 if(document.getElementById('zip').value!="")
 {
	if(isNaN(document.getElementById('zip').value))
	{
	alert("Please Enter Only numeric zip code");
	document.getElementById("zip").focus();
	return false;
	}
	if(document.getElementById('zip').value.length<4)
	{
	alert("Please Enter Atleast 4 Digits");
	document.getElementById("zip").focus();
	return false;
	}

  if(document.getElementById('org_website').value=="")
 {
  alert("Please enter Your website");
  document.getElementById('org_website').focus();
  return false;
 
  }
  if(document.getElementById('org_logo').value=="")
 {
  alert("Please upload Your logo");
  document.getElementById('org_logo').focus();
  return false;
 }
 
 }
}
/*form display script*/

/*function showForm(form_org){
  alert('hrllossss');
	if(document.getElementById(form_org).style.display == 'block'){
	document.getElementById(form_org).style.display = 'none';
		
	
	}else{
		document.getElementById(form_org).style.display = 'block';
		
		
		
	}
}


function showForm(org_outer){
	if(document.getElementById(org_outer).style.display == 'block'){
	document.getElementById(org_outer).style.display = 'none';
	}else{
		document.getElementById(org_outer).style.display = 'block';
	}
}

function showForm(adv){
	if(document.getElementById(adv).style.display == 'block'){
	document.getElementById(adv).style.display = 'none';
	

	}else{
		document.getElementById(adv).style.display = 'block';
		document.getElementById(form_org).style.display = 'none';
		document.getElementById(org_outer).style.display = 'none';
		
	
	}
}
/* 
function(form_org){
	alert();
  document.getElementById("form_org").style.display = "block";
} */
function showForm(nm){
 
  if(nm == 'form_org'){
    
      document.getElementById(nm).style.display = 'block';
       document.getElementById("org_outer").style.display = 'none';
        document.getElementById("adv_new").style.display = 'none';
    }
    if(nm == 'org_outer'){
      document.getElementById(nm).style.display = 'block';
      document.getElementById("form_org").style.display = 'none';
        document.getElementById("adv_new").style.display = 'none';
    }
    if(nm == 'adv_new'){
      document.getElementById(nm).style.display = 'block';
      document.getElementById("form_org").style.display = 'none';
        document.getElementById("org_outer").style.display = 'none';
    }

    }

</script>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4;height:103px">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Welcome User</span>
  <div class="">
                    <a class="navbar-brand" href="Frontpage.php"><img src="assets/images/logo.png" alt="Freelancer Logo" /></a>
					</div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="float:right">
                    <ul class="nav navbar-nav ">
                        
                        
                        <li><a href="Frontpage.php" >Home</a></li>
						<li><a href="javascript:void(0)">Candidates</a></li>
                        <li><a href="dashboard.php">Organisations</a></li>
                        <li><a href="javascript:void(0)">Opportunities</a></li>
                        <!-- <li><a href="signup.php">Sign Up/</a></li>-->
                        <li><a href="logout.php">Log Out</a></li>
                        
                    </ul>
                </div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:250px;margin-top:30px" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <!--<img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">-->
    </div>
    <div class="w3-col s8 w3-bar">
     <span> <strong></strong></span><br>
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>-->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <!--<button  class="w3-bar-item w3-button w3-padding w3-blue " id="OrganisationDet"><i class="fa fa-users fa-fw"></i>  Organisation Details</button>-->
        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="showForm('form_org'); return false;"> <i class="fa fa-envelope"></i>  Organisation Profile</a>
		<!--organisation form-->
		
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="showForm('org_outer'); return false;"><i class="fa fa-eye fa-fw"></i>  My Profile</a>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="showForm('adv_new'); return false;"><i class="fa fa-users fa-fw"></i>  Opportunities</a>
  <!-- <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br>--><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
  <div class="w3-container" id="Main_Container"></div>
  
<div class="container">
    <form name="myForm"  class="well form-vertical" id="form_org" onSubmit="return validation(this)" method="post" action="" encytype="multipart/form-data" >
<?php if($data == '') { ?>
<fieldset>

<!-- Form Name -->
<legend>Organisation Details</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Organisation Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input type="hidden" class="form-control" id="" name="main_user" value="<?php echo $all_data['id']; ?>">
  <input  name="org_name" id="org_name"  placeholder="Organisation Name" class="form-control" type="text">
 
  
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Organisation Description</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 <!-- <input name="Organisation Description" placeholder="Organisation Description" class="form-control"  type="text">-->
        	<textarea class="form-control" name="org_desc" id="org_desc" placeholder="Organisation Description"></textarea>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" id="email" placeholder="E-Mail Address" class="form-control"  type="text">
  <div id="myDivAjax"><div id="myDiv"></div></div></div>
    </div>
  </div>
  
<!-- Text input-->    	
  <div class="form-group">
  <label class="col-md-4 control-label">Logo</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="org_logo" id="org_logo"  placeholder="choose logo" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label">Website Name</label>  
   <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
  <input name="org_website" placeholder="Website name" class="form-control" type="text">
    </div>
  </div>
</div>
<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Address</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="org_location" id="org_location" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="org_phn_no" id="org_phn_no" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>




<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">City</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="City" id="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="State" required class="form-control selectpicker" value="ok">
      <option value=" " >Please select your state</option>
      <option>New South Wales</option>
      <option>Queensland</option>
      <option >South Australia</option>
      <option >Tasmania</option>
      <option >South Australia</option>
      <option >Victoria</option>
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
  <input name="Zip_Code" id="Zip_Code" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-primary" name="submit">								
  </div>
</div>
<!-- Button to view organisation-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="" class="btn btn-warning" >View Organisation Profile </button>
  </div>
</div>

</fieldset>
<?php } else { ?>
<div class ="container" id="OuterorgProfile">
<iframe src=" http://studbiz.jcubitgroup.com/studbizz/orgprofileOuter.php" style ="width:100%;height:1000px;overflow:hidden">
  
</iframe>
</div>
<?php } ?>
</div>
</form>
</div>

<!--organisation Outer-->

 
 <!--profile form starts-->
 
 <div class="container">
  	<form class ="well form-vertical" action="" method="post" id="org_outer" style="margin-left: 259px;display: none;">
	<fieldset>
	<legend> My Profile</legend>
<div class="form-group">
  <label class="col-md-4 control-label"> Representative First Name:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" class="form-control" id="First_Name" name="First_Name" value=" <?php echo $p_data[name]; ?>">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Representative Last Name:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		<input type="text" class="form-control" id="Last_Name" name="Last_Name" value=" <?php echo $p_data[last_name]; ?> ">
    </div>
  </div>
</div>


	
<div class="form-group">
  <label class="col-md-4 control-label">Representative Email:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-email"></i></span>
     <input type="email" class="form-control" id="profile_email"  name="profile_email" value=" <?php echo $p_data[email];?>">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Representative Job Role:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		<input type="text" class="form-control" id="role" name="role">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"> Representative Phone Number:</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input type="text" class="form-control" id="phone" name="phone">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Representative LinkedIN:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-email"></i></span>
     <input type="email" class="form-control" id="linked"  name="linked" value=" ">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"> Representative Password</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		 <input type="password" class="form-control" id="Password" name="Password">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label"> Representative Confirm Password</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		 <input type="password" class="form-control" id="conPassword" name="conPassword">
    </div>
  </div>
</div>
      
   
 <div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Update Profile </button>
  </div>
</div>

<!-- Button to view organisation
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >View Profile </button>
  </div>
</div>-->
	</fieldset>
  </form>
</div>
 
 
 <!--profile ends-->
 
  <!--Advertisnment starts-->
 
<div class="container">
  	<form class ="well form-vertical" action="" method="post" id="adv_new" style="margin-left: 259px;display: none;">
	<fieldset>
	<legend> Opportunities</legend>
<div class="form-group">
  <label class="col-md-4 control-label">Title</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
		<input type="text" class="form-control" id="adv_activities" placeholder="Enter title" name="title">
    </div>
  </div>
</div>
	
<div class="form-group">
  <label class="col-md-4 control-label">Description:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
     <input type="text" class="form-control" id="adv_desc" placeholder="Enter description" name="adv_desc">
	 <input type="hidden" class="form-control" id="" name="main_user" value="<?php echo $all_data['id']; ?>">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Outcomes:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		<input type="text" class="form-control" id="adv_outcomes" placeholder="Enter outcomes" name="adv_outcomes">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label">Activities Involved:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
		<input type="text" class="form-control" id="adv_activities" placeholder="Enter activities" name="adv_activities">
    </div>
  </div>
</div>

	
<div class="form-group">
   <label class="col-md-4 control-label" name="adv_duration">Duration:</label>
    <div class="col-md-6 selectContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
    <select name="state" required class="form-control selectpicker" >
      <option value=" " >Please select</option>
      <option>1 month</option>
      <option>3 months</option>
      <option >6 months</option>
      <option >1 year</option>
      <option >More than 1 year</option>
       <option >Ongoing</option>
    </select>
  </div>
  </div>
</div>

<div class="form-group">
   <label class="col-md-4 control-label" name="adv_category">Category:</label>
    <div class="col-md-6 selectContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="category" required class="form-control selectpicker" >
      <option value=" " >Please select Category </option>
      <option>Accounting</option>
      <option>Information Technology</option>
      <option >Retail</option>
      <option >Hospitality</option>
    </select>
  </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Start date:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
		 <input type="date" class="form-control" id="adv_start_date" placeholder="Enter date" name="adv_start_date">
    </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Skills:</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		<input type="text" class="form-control" id="adv_skills" placeholder="Enter Skills" name="adv_skills">
    </div>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-4 control-label">Location of Placement</label>
    <div class="col-md-6 selectContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
    <select name="state" required class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>New South Wales</option>
      <option>Queensland</option>
      <option >South Australia</option>
      <option >Tasmania</option>
      <option >South Australia</option>
      <option >Victoria</option>
      <option >Northern Territory</option>
      <option >ACT</option>
    </select>
  </div>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Submit </button>
  </div>
</div>

<!-- Button to view organisation-->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >View Opportunity </button>
  </div>
</div>
	</fieldset>
  </form>
</div>


<!--advertisnment ends-->










  

  <!-- Footer -->
  

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
<?php 
}else{
	$admin->CheckLogin();
	}
?>