<?php
session_start();
 include("Header.php") ?>
<?php include("admin_menu.php") ?>
<?php

$bid=$_POST['CourseID'];
$uid=$_POST['CourseName'];
$dol=$_POST['FacID'];
$dor=$_POST['Offered'];
$status=$_POST['Credits'];
$remark=$_POST['Prereq'];
$Type=$_POST['Type'];
include("db_connector.php");

$sql = "INSERT INTO student_tab (Course_id, Course_name, Fac_id, Offered_in, credits, pre_req, type)
		VALUES ('$bid', '$uid', '$dol', '$dor', '$status', '$remark', '$Type' )";
$result = $connect->query($sql);

if($result == FALSE)
{
	echo "ERROR: ". $connect->error;
}
else
{
	echo "alert('Course Added!')";
	header('location: /EMS/admin/admin_home.php');
}
?>