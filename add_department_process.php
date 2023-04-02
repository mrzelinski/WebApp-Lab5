<?php
session_start();
 include("Header.php") ?>
<?php include("admin_menu.php") ?>
<?php

$bid=$_POST['DeptID'];
$uid=$_POST['DeptName'];
$dol=$_POST['DeptChair'];
$dor=$_POST['DeptDean'];
$status=$_POST['Budget'];
include("db_connector.php");

$sql = "INSERT INTO student_tab (Dept_id, Dept_Name, Dept_chair, Dept_dean, budget)
		VALUES ('$bid', '$uid', '$dol', '$dor', '$status' )";
$result = $connect->query($sql);

if($result == FALSE)
{
	echo "ERROR: ". $connect->error;
}
else
{
	echo "alert('Department Added!')";
	header('location: /EMS/admin/admin_home.php');
}
?>