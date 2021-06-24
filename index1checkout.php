<!DOCTYPE html>

<html>

<head>
<style>
th, tr,td {
  border: 1px solid black;
  font-size:30px;
  color:black;
  align:center;
  
}
</style>
<link rel="stylesheet" type="text/css" href="reservationstyles.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>


	<form method="post" action="insert_processcheckout.php" >
	<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="">
		</div>
		<div class="input-group">
			<label>Room Number</label>
			<input type="text" name="roomnumber" value="">
		</div>
		<div class="input-group">
			<label>Customer Name</label>
			<input type="text" name="customername" value="">
		</div>
		<div class="input-group">
			<label>CNIC/Passport</label>
			<input type="text" name="customercnicpassport" value="">
		</div>
		<div class="input-group">
			<label>Room Rent</label>
			<input type="text" name="customerroomrent" value="">
		</div>
		<div class="input-group">
			<label>Restaurant Bill</label>
			<input type="text" name="customerrestaurantbill" value="">
		</div>
		<div class="input-group">
			<label>Total Bill</label>
			<input type="text" name="customertotalbill" value="">
		</div>
		<div class="input-group">
			<label>Status</label>
			<input type="text" name="customerstatus" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
		




	</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Date</th>
			<th>Room Number</th>
			
			<th>Customer Name</th>
			<th>CNIC/Passport</th>
			<th>Room Rent</th>
			<th>Restaurant Bill</th>
			<th>Total Bill</th>
			<th>Status</th>
			
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php
		$query="select * from checkoutdetails";
		$conn=mysqli_connect("localhost", "root", "");
		if(mysqli_connect_error())
		{
			echo "failed to connect to mysql: ".mysqli_connect_error() ;
		}
		if($conn)
		{
			
			if(mysqli_select_db($conn, "crud"))
			{
				
				$result=mysqli_query($conn, $query);
			}

		}

	while ($row = mysqli_fetch_array($result)) { ?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['roomnumber']; ?></td>
			<td><?php echo $row['customername']; ?></td>
			<td><?php echo $row['customercnicpassport']; ?></td>
			<td><?php echo $row['customerroomrent']; ?></td>
			<td><?php echo $row['customerrestaurantbill']; ?></td>
			<td><?php echo $row['customertotalbill']; ?></td>
			<td><?php echo $row['customerstatus']; ?></td>
			
			<td>
				<a href="editcheckout.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="deletecheckout.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
</body>
</html>