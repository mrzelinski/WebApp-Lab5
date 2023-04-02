<?php session_start();
include("Header.php") ?>
<?php include("admin_menu.php") ?>
<html>
	<head>
	</head>
	<body>
	<center>
	<h1>Add Faculty </h1>
	<form name="add-student" method="POST" action="add_faculty_process.php">
	<table>
	<tr>
	<td>Faculty Id: </td> <td><input type+"text" name="FacultyID" id="FacultyID" /></td>
	</tr> 
	
	<tr>
	<td>Faculty Name: </td> <td><input type+"text" name="FacultyName" id="FacultyName" /></td>
	</tr>
	
	<tr>
	<td>Date of Joining: </td> <td><input type+"text" name="DOJ" id="DOJ" /></td>
	</tr>
	
	<tr>
	<td>Qualification: </td> <td><input type+"text" name="Qualification" id="Qualification" /></td>
	</tr>
	
	<tr>
	<td>Department: </td> <td><input type+"text" name="Department" id="Department" /></td>
	</tr>
	
	<tr>
	<td align="center" colspan=2> <input type="submit" value="AddFaculty"/> </td>
	</tr>
	</table>
	</form>
	</center>
	</body>
</html>