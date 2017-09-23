<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "jcubitgr_studbiz");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$adv_desc = mysqli_real_escape_string($link, $_REQUEST['adv_desc']);
$adv_outcomes = mysqli_real_escape_string($link, $_REQUEST['adv_outcomes']);
$adv_activities = mysqli_real_escape_string($link, $_REQUEST['adv_activities']);
$adv_duration = mysqli_real_escape_string($link, $_REQUEST['adv_duration']);
$adv_publish_date = mysqli_real_escape_string($link, $_REQUEST['adv_publish_date']);
$adv_expiry_date = mysqli_real_escape_string($link, $_REQUEST['adv_expiry_date']);
 $adv_start_date = mysqli_real_escape_string($link, $_REQUEST['adv_start_date']);

// attempt insert query execution
$sql = "INSERT INTO advertisement (adv_desc, adv_outcomes, adv_activities,adv_duration,adv_publish_date,adv_expiry_date,adv_start_date) 
VALUES ('$adv_desc', '$adv_outcomes', '$adv_activities','$adv_duration','$adv_publish_date','$adv_expiry_date','$adv_start_date')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>