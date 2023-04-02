<?php
session_start();
include('Header.php');
//include('stu_menu.php');
include("db_connector.php");
$uid=($_SESSION['id']);
$dept = $row['Stu_major'];
?>
<html>
<body>

	
<div class="table-3">
    <h2>Faculty Information</h2>
    <table>
      <tbody>
        <tr>
          <th>Faculty ID</th>
          <th>Faculty Name</th>
          <th>Date of Joining</th>
		  <th>Qualification</th>
		  <th>Department</th>
        </tr>
		<?php $sql2="SELECT * FROM faculty_tab WHERE department='$dept'";
		$result2=$connect->query($sql2);
		while($row2 = $result2->fetch_assoc()){ ?>
        <tr>
          <td data-th="Faculty ID"><?php echo $row2['Fac_id']; ?></td>
          <td data-th="Faculty Name"><?php echo $row2['Fac_name']; ?></td>
          <td data-th="Date of Joining"><?php echo $row2['Fac_DOJ']; ?></td>
		  <td data-th="Qualification"><?php echo $row2['qualification']; ?></td>
		  <td data-th="Department"><?php echo $row2['department']; ?></td>
        </tr>
		<?php } ?>
	   </tbody>
    </table>
 </div>
</body>
</html>