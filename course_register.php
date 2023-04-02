<?php
session_start();
include('Header.php');
include('stu_menu.php');
include("db_connector.php");
$uid=($_SESSION['id']);
?>
<html>
<head>
<link rel="stylesheet" href="css/myStyles.css">
</head>
<body>
	
<div class="table-3">
    <h2>Core Classes</h2>
    <table>
      <tbody>
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Faculty ID</th>
		  <th>Offered</th>
		  <th>Credits</th>
		  <th>Prerequisites</th>
		  <th>Type</th>
		  <th>Register</th>
        </tr>
		<?php $sql="SELECT * FROM courses_tab";
		$result=$connect->query($sql);
		while($row = $result->fetch_assoc()){ ?>
        <tr>
          <td data-th="Course ID"><?php echo $row['Course_id']; ?></td>
		  <td data-th="Course Name"><?php echo $row['Course_name']; ?></td>
          <td data-th="Faculty ID"><?php echo $row['Fac_id']; ?></td>
          <td data-th="Offered"><?php echo $row['Offered_in']; ?></td>
          <td data-th="Credits"><?php echo $row['credits']; ?></td>
		  <td data-th="Prerequisites"><?php echo $row['pre_req']; ?></td>
		  <td data-th="Type"><?php echo $row['type']; ?></td>
		  <td data-th="Type"><button type="button">Register</button></td>
		  
        </tr>
		<?php } ?>
	   </tbody>
    </table>
 </div>
</body>
</html>