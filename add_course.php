<?php session_start();
include("Header.php") ?>
<?php include("admin_menu.php") ?>
<html>
	<head>
	</head>
	<body>
	<center>
	<h1>Add Course </h1>
	<form name="add-course" method="POST" action="add_course_process.php">
	<table>
	<tr>
	<td>Course Id: </td> <td><input type+"text" name="CourseID" id="CourseID" /></td>
	</tr> 
	
	<tr>
	<td>Course Name: </td> <td><input type+"text" name="Course Name" id="Course Name" /></td>
	</tr>
	
	<tr>
	<td>Faculty ID: </td> <td><input type+"text" name="FacID" id="FacID" /></td>
	</tr>
	
	<tr>
	<td>Offered: </td> <td><input type+"text" name="Offered" id="Offered" /></td>
	</tr>
	
	<tr>
	<td>Credits: </td> <td><input type+"text" name="Credits" id="Credits" /></td>
	</tr>
	
	<tr>
	<td>Prerequisites: </td> <td><input type+"text" name="Prereq" id="Prereq" /></td>
	</tr>
	
	<tr>
	<td>Type: </td> <td><input type+"text" name="Type" id="Type" /></td>
	</tr>
	
	<tr>
	<td align="center" colspan=2> <input type="submit" value="AddCourse"/> </td>
	</tr>
	</table>
	</form>
	</center>
	</body>
</html>