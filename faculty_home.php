<?php
session_start();
$Role = $_SESSION['role'];
if(($Role !="F"))
{
echo "You do not have access to this page. <a href='/EMS/login_page.php' >Login Again</a> ";
session_destroy();
}
else{
?>
<html>
<head>
</head>
<body>
<?php 
	$uid=($_SESSION['id']);
	include("Header.php"); 
	include ("faculty_menu.php");
	include("Fac_info.php");
	?>


<?php
if(isset($_SESSION['id']))

{
?>

<?php 
		include("db_connector.php");
		$uid=($_SESSION['id']);
?>
<?php

}
else
{
   echo "session expired";

}
?> 
<?php }?>  

<?php //include ("footer_page.php"); ?>
</div>
</body>
</html>