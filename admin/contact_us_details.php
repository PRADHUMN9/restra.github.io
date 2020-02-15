
<html>
<head>
 <title>CUSTOMER DETAILS</title>

</head>
<body>
  <table width="100%px" border="2px;" cellpadding="0px;" cellspacing="0px">
    <tr>
	  <th>Name</th>
	  <th>Email</th>
	  <th>Contact Number</th>
	  <th>Subject</th>
	  <th>Message</th>
	</tr>
	<?php
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'restra');
	$sql="SELECT * FROM contact_us";
	$record=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($record)){
	?>	<tr>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['contact']?></td>
			<td><?php echo $row['sub']?></td>
			<td><?php echo $row['message']?></td>
		</tr>
		<?php
	}
	?>
	
  </table>
</body>
</html>