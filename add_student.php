<?php session_start();
include("Header.php") ?>
<?php include("admin_menu.php") ?>
<html>
	<head>
	</head>
	<body>
	<center>
	<h1>Add Student </h1>
	<form name="add-student" method="POST" action="add_student_process.php">
	<table>
	<tr>
	<td>Students Id: </td> <td><input type+"text" name="StudentID" id="StudentID" /></td>
	</tr> 
	
	<tr>
	<td>Students Name: </td> <td><input type+"text" name="StudentName" id="StudentName" /></td>
	</tr>
	
	<tr>
	<td>Students Enrollment Year: </td> <td><input type+"text" name="EnrYear" id="EnrYear" /></td>
	</tr>
	
	<tr>
	<td>Students Major: </td> <td><input type+"text" name="Major" id="Major" /></td>
	</tr>
	
	<tr>
	<td>Students GPA: </td> <td><input type+"text" name="CGPA" id="CGPA" /></td>
	</tr>
	
	<tr>
	<td>Students Graduation Year: </td> <td><input type+"text" name="GradYear" id="GradYear" /></td>
	</tr>
	
	<tr>
	<td align="center"> <input type="submit" value="AddStudent"/> </td>
	</tr>
	</table>
	</form>
	</center>
	</body>
</html>