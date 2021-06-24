<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="reservationstyles.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
	<center><H1>Update Record</H1></center>
	<?php 
		$id=$_GET["edit"];
		
		$query="select * from checkoutdetails where  id=$id;";
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
		$row=mysqli_fetch_array($result);
		
		

	?>

	<form method="post" action="update_processcheckout.php" >
	<div class="input-group">
			<label>Serial No.</label>
			<input type="text"  name="id" value="<?php echo $row['id']; ?>">
		</div>
	<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="<?php echo $row['date']; ?>">
		</div>
		<div class="input-group">
			<label>Room Number</label>
			<input type="text" name="roomnumber" value="<?php echo $row['roomnumber']; ?>">
		</div>
		<div class="input-group">
			<label>Customer Name</label>
			<input type="text" name="customername" value="<?php echo $row['customername']; ?>">
		</div>
		<div class="input-group">
			<label>CNIC/Passport</label>
			<input type="text" name="customercnicpassport" value="<?php echo $row['customercnicpassport']; ?>">
		</div>
		<div class="input-group">
			<label>Customer Room Rent</label>
			<input type="text" name="customerroomrent" value="<?php echo $row['customerroomrent']; ?>">
		</div>
		<div class="input-group">
			<label>Customer Restaurant Bill</label>
			<input type="text" name="customerrestaurantbill" value="<?php echo $row['customerrestaurantbill']; ?>">
		</div>
		<div class="input-group">
			<label>Total Bill</label>
			<input type="text" name="customertotalbill" value="<?php echo $row['customertotalbill']; ?>">
		</div>
		<div class="input-group">
			<label>Customer Status</label>
			<input type="text" name="customerstatus" value="<?php echo $row['customerstatus']; ?>">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update Data</button>
		</div>
		


<form>
	</form>
</body>
</html>