<?php
session_start();
 include("Header.php") ?>
<?php include("admin_menu.php") ?>
<?php

$bid=$_POST['StudentID'];
$uid=$_POST['StudentName'];
$dol=$_POST['EnrYear'];
$dor=$_POST['Major'];
$status=$_POST['CGPA'];
$remark=$_POST['GradYear'];
include("db_connector.php");

$sql = "INSERT INTO student_tab (Stu_id, Stu_Name, Stu_entrollment_year, Stu_Major, CGPA, graduation_year)
		VALUES ('$bid', '$uid', '$dol', '$dor', '$status', '$remark' )";
$result = $connect->query($sql);

if($result == FALSE)
{
	echo "ERROR: ". $connect->error;
}
else
{
	echo "alert('Student Added!')";
	header('location: /EMS/admin/admin_home.php');
}
?>