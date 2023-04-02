<?php

include("db_connector.php");
$uid=($_SESSION['id']);
$sql="SELECT * FROM student_tab WHERE Stu_id='$uid'";
$result=$connect->query($sql);
$row = $result->fetch_assoc();
?>
<html>
<body>

	
<div class="table-3">
    <h2>Account Information</h2>
    <table>
      <tbody>
        <tr>
          <th>Student ID</th>
          <th>Student Name</th>
          <th>Enrollment Year</th>
		  <th>Major</th>
		  <th>GPA</th>
		  <th>Graduation Year</th>
        </tr>
        <tr>
          <td data-th="Student ID"><?php echo $row['Stu_id']; ?></td>
          <td data-th="Student Name"><?php echo $row['Stu_name']; ?></td>
          <td data-th="Enrollment Year"><?php echo $row['Stu_entrollment_year']; ?></td>
		  <td data-th="Major"><?php echo $row['Stu_major']; ?></td>
		  <td data-th="GPA"><?php echo $row['CGPA']; ?></td>
		  <td data-th="Graduation Year"><?php echo $row['graduation_year']; ?></td>
        </tr>
	   </tbody>
    </table>
 </div>
</body>
</html>