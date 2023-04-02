<?php 
if($_POST && "all required variables are present") {
session_start();
$cap=($_POST['captcha']);
$dig=($_SESSION['digit']);
if($cap != $dig) {header('location: login-error.php');session_destroy();}
}
?>
<html>


<body>

<?php

include ("db_connector.php");

$uid=($_POST['userid']);
$pwd=($_POST['pwd']);


		$sql="SELECT * FROM users_tab where userid='$uid' AND password='$pwd'";
		$result=$connect->query($sql);
		$row = $result->fetch_assoc(); 
 
      if($row['role']==='S')  //Students
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "S";
        header('location: /EMS/student/student_home.php');
		 
     }
	 elseif($row['role']==='F')  //Faculty
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "F";
         header('location: /EMS/faculty/faculty_home.php');
		 
     }
	 elseif($row['role']==='A')  //Admin
      {

        $_SESSION['id']=$uid;
        $_SESSION['pwd']=$pwd;
		$_SESSION['role'] = "A";
         header('location: /EMS/admin/admin_home.php');
		 
     }

     
	 else
	 {
		   //header('location: login-error.php');
	 }
 

//-------------------------------Login Failed---------------------
     


?>




</html>