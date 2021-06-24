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
		
		$query="select * from info where  id=$id;";
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

	<form method="post" action="update_processreservation.php" >
	<div class="input-group">
			<label>Serial No.</label>
			<input type="text"  name="id" value="<?php echo $row['id']; ?>">
		</div>
	<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="<?php echo $row['date']; ?>">
		</div>
		<div class="input-group">
			<label>Bedroom Type</label>
			<input type="text" name="type" value="<?php echo $row['type']; ?>">
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
			<input type="text" name="cnicpassport" value="<?php echo $row['cnicpassport']; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="customeraddress" value="<?php echo $row['customeraddress']; ?>">
		</div>
		<div class="input-group">
			<label>Phone No.</label>
			<input type="text" name="customerphonenumber" value="<?php echo $row['customerphonenumber']; ?>">
		</div>
		<div class="input-group">
			<label>Amount</label>
			<input type="number" name="amount" value="<?php echo $row['amount']; ?>">
		</div>
		<div class="input-group">
			<label>Vehicle Number</label>
			<input type="text" name="vehiclenumber" value="<?php echo $row['vehiclenumber']; ?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update Data</button>
		</div>
		


<form>
	</form>
</body>
</html>