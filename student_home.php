<?php
session_start();
$Role = $_SESSION['role'];
if(($Role !="S"))
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
	include ("stu_menu.php");
	include("stu_info.php");
	?>

<div id="wrapper">
<table align=center bgcolor="#FFFFFF" width=1000px>
<tr><td>

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
</form>
</td></tr>
</table>

<?php //include ("footer_page.php"); ?>
</div>
</body>
</html>