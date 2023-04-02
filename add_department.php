<?php session_start();
include("Header.php") ?>
<?php include("admin_menu.php") ?>
<html>
	<head>
	</head>
	<body>
	<center>
	<h1>Add Department </h1>
	<form name="add-department" method="POST" action="add_department_process.php">
	<table>
	<tr>
	<td>Department Id: </td> <td><input type+"text" name="DeptID" id="DeptID" /></td>
	</tr> 
	
	<tr>
	<td>Department Name: </td> <td><input type+"text" name="DeptName" id="DeptName" /></td>
	</tr>
	
	<tr>
	<td>Department Chair: </td> <td><input type+"text" name="DeptChair" id="DeptChair" /></td>
	</tr>
	
	<tr>
	<td>Department Dean: </td> <td><input type+"text" name="DeptDean" id="DeptDean" /></td>
	</tr>
	
	<tr>
	<td>Budget: </td> <td><input type+"text" name="Budget" id="Budget" /></td>
	</tr>
	
	<tr>
	<td align="center" colspan=2> <input type="submit" value="AddDepartment"/> </td>
	</tr>
	</table>
	</form>
	</center>
	</body>
</html>