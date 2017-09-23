<?php
include"lib/db.php";
class main{
		function __construct(){
			global $database;
			@session_start();
		}
		function user_login($redirect){
			
			if(isset($_POST['email'],$_POST['password'])){
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$sql=mysql_query("SELECT * from users WHERE email = '$email'") or die(mysql_error());
			$data = mysql_fetch_assoc($sql);
			 
			$basePass = $data['password'];
			$all_data= array('name' => $data['name'],
											'email' => $data['email'],
											'password' => $data['password'],
											'id' => $data['id']);
											
			
			
			/* if(!empty($_SESSION["data"]) && isset($_SESSION["data"])){ */
				if($email===$data['email'] && $password===$data['password']){
				
				$_SESSION["data"] = $all_data;
					$sessionData = $_SESSION["data"];
					$redirect = $redirect;
					header("Location: $redirect");die;
				}
				else{
					
					$error = 'Please enter valid username or Password';
					
				}
				return $error;
			/* }
			else{
				echo'';
			} */
		}	
		}	
	function enter_values(){
		if(isset($_POST['submit'],$_POST['First_Name'],$_POST['Last_Name'],$_POST['Email'],$_POST['Password'])){
			$First_Name=$_POST['First_Name'];
			$Last_Name=$_POST['Last_Name'];
			$Email=$_POST['Email'];
			$Password=$_POST['Password'];
			$sql=mysql_query("SELECT * from users WHERE email = '$Email'") or die(mysql_error());
			$data = mysql_fetch_assoc($sql);
			if($data == ''){
			mysql_query("INSERT INTO users set name='$First_Name',last_name='$Last_Name',email='$Email',Password='$Password'")or die(mysql_error());
					header('Location: signup_finish.php');
			}else{
				echo 'This email is already in use';die;
			}
	}	
		
		
}
function logout(){
			session_unset($_SESSION);
            session_destroy();
			@header('Location: login.php');die;
		}
	function CheckLogin(){
		
		if(empty($_SESSION["data"]) && ($_SESSION["data"] == '')){
			
			header('Location: login.php');
			die;
		}
		}
 function create_org(){
	 
		if(isset($_POST['submit'],$_POST['main_user'],$_POST['org_name'],$_POST['org_desc'],$_POST['email'],$_POST['org_logo'],$_POST['org_website'],$_POST['org_location'],$_POST['org_phn_no'],$_POST['City'],$_POST['State'],$_POST['Zip_Code'])){
			
			$main_user=$_POST['main_user'];
			$org_name=$_POST['org_name'];
			$org_desc=$_POST['org_desc'];
			$email=$_POST['email'];
			$org_logo=$_POST['org_logo'];
			$org_website=$_POST['org_website'];
			$org_location=$_POST['org_location'];
			$org_phn_no=$_POST['org_phn_no'];
			$City=$_POST['City'];
			$State=$_POST['State'];
			$Zip_Code=$_POST['Zip_Code'];
			
			mysql_query("INSERT INTO organisation set main_user='$main_user',org_name='$org_name',org_desc='$org_desc',email='$email',org_logo='$org_logo',org_website='$org_website',org_location='$org_location',org_phn_no='$org_phn_no',City='$City',State='$State',Zip_Code='$Zip_Code'")or die(mysql_error());
		}
		
	}
	function create_adv(){	
		if(isset($_POST['submit'],$_POST['adv_desc'],$_POST['adv_outcomes'],$_POST['adv_activities'],$_POST['adv_duration'],$_POST['skills_nm'],$_POST['adv_publish_date'],$_POST['adv_expiry_date'],$_POST['adv_start_date'],$_POST['org_id'],$_POST['rep_id'],$_POST['cat_id'],$_POST['sk_id'])){
				$adv_desc=$_POST['adv_desc'];
				$adv_outcomes=$_POST['adv_outcomes'];
				$adv_activities=$_POST['adv_activities'];
				$adv_duration=$_POST['adv_duration'];
				$skills_nm=$_POST['skills_nm'];
				$adv_publish_date=$_POST['adv_publish_date'];
				$adv_expiry_date=$_POST['adv_expiry_date'];
				$adv_start_date=$_POST['adv_start_date'];
				$org_id=$_POST['org_id'];
				$rep_id=$_POST['rep_id'];
				$cat_id=$_POST['cat_id'];
				$sk_id=$_POST['sk_id'];
				
				mysql_query("INSERT INTO advertisement set adv_desc='$adv_desc',adv_outcomes='$adv_outcomes',adv_activities='$adv_activities',adv_duration='$adv_duration',skills='$skills_nm',adv_publish_date='$adv_publish_date',adv_expiry_date='$adv_expiry_date',adv_start_date='$adv_start_date',org_id='$org_id',rep_id='$rep_id',cat_id='$cat_id',sk_id='$sk_id'")or die(mysql_error());
			}
	}
/*  function getSkills(){
	$sql=mysql_query("SELECT * from skills") or die(mysql_error());
		$data = mysql_fetch_assoc($sql);
		 print_r($data);die; 
			return $data;
	
	
}  */
function org_profile_outer($us_id){
	$id=$us_id;
	
	$sql=mysql_query("SELECT * from organisation WHERE main_user = '$id'") or die(mysql_error());
			$data = mysql_fetch_assoc($sql);
			return $data;
	}

function check_org_profile($id){
	$i_id = $id[id];
	$sql=mysql_query("SELECT * from organisation WHERE main_user = '$i_id'") or die(mysql_error());
			$data = mysql_fetch_assoc($sql);
			return $data;
	}
function user_profile($all_data){
	$id = $all_data[id];
	//print_r($all_data);die;
	$sql=mysql_query("SELECT * from users WHERE id = '$all_data'") or die(mysql_error());
			$data = mysql_fetch_assoc($sql);
			return $data;
	}
}
$admin = new main;








?>