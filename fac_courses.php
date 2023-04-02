<html>
<body>
<?php
session_start();
include("Header.php");
include("faculty_menu.php");
include("db_connector.php");
$uid=($_SESSION['id']);
$sql="SELECT * FROM courses_tab WHERE Fac_id='$uid'";
$result=$connect->query($sql);
while($row = $result->fetch_assoc()){
?>
	
<div class="table-3">
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
        </tr>
        <tr>
		  <td data-th="Course ID"><?php echo $row['Course_id']; ?></td>
		  <td data-th="Course Name"><?php echo $row['Course_name']; ?></td>
          <td data-th="Faculty ID"><?php echo $row['Fac_id']; ?></td>
          <td data-th="Offered"><?php echo $row['Offered_in']; ?></td>
          <td data-th="Credits"><?php echo $row['credits']; ?></td>
		  <td data-th="Prerequisites"><?php echo $row['pre_req']; ?></td>
		  <td data-th="Type"><?php echo $row['type']; ?></td>
        </tr>
		<?php $cid=$row['Course_id']; ?>
		
	
	<div class="table-3">
    <table>
      <tbody>
        <tr>
          <th>Registration ID</th>
          <th>Course ID</th>
          <th>Student ID</th>
		  <th>Faculty ID</th>
		  <th>Semester</th>
        </tr>
		<?php
		$sql2="SELECT * FROM registration_tab WHERE Course_id='$cid'";
		$result2=$connect->query($sql2);
		while($row2 = $result2->fetch_assoc()){
		?>
        <tr>
		  <td data-th="Course ID"><?php echo $row2['Reg_id']; ?></td>
		  <td data-th="Course Name"><?php echo $row2['Course_id']; ?></td>
          <td data-th="Faculty ID"><?php echo $row2['Stu_id']; ?></td>
          <td data-th="Offered"><?php echo $row2['Fac_id']; ?></td>
          <td data-th="Credits"><?php echo $row2['Semester']; ?></td>
        </tr>
		<?php } ?>
	   </tbody>
    </table>
	<?php echo"<br><br>"; ?>
	<?php } ?>
		
	   </tbody>
    </table>
 </div>
</body>
</html>
