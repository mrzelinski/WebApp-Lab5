<?php
session_start();
 include("Header.php") ?>
<?php include("admin_menu.php") ?>
<?php

$bid=$_POST['FacultyID'];
$uid=$_POST['FacultyName'];
$dol=$_POST['DOJ'];
$dor=$_POST['Qualification'];
$status=$_POST['Department'];
include("db_connector.php");

$sql = "INSERT INTO student_tab (Fac_id, Fac_Name, Fac_DOJ, qualification, department)
		VALUES ('$bid', '$uid', '$dol', '$dor', '$status' )";
$result = $connect->query($sql);

if($result == FALSE)
{
	echo "ERROR: ". $connect->error;
}
else
{
	echo "alert('Faculty Added!')";
	header('location: /EMS/admin/admin_home.php');
}
?>