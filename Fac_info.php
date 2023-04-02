<?php

include("db_connector.php");
$uid=($_SESSION['id']);
$sql="SELECT * FROM faculty_tab WHERE Fac_id='$uid'";
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
          <th>Faculty ID</th>
          <th>Faculty Name</th>
          <th>Date of Joining</th>
		  <th>Qualification</th>
		  <th>Department</th>
        </tr>
        <tr>
          <td data-th="Faculty ID"><?php echo $row['Fac_id']; ?></td>
          <td data-th="Faculty Name"><?php echo $row['Fac_name']; ?></td>
          <td data-th="Date of Joining"><?php echo $row['Fac_DOJ']; ?></td>
		  <td data-th="Qualification"><?php echo $row['qualification']; ?></td>
		  <td data-th="Department"><?php echo $row['department']; ?></td>
        </tr>
	   </tbody>
    </table>
 </div>
</body>
</html>