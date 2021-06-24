<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="restaurantstyles.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
	<center><H1>Update Record</H1></center>
	<?php 
		$id=$_GET["edit"];
		
		$query="select * from restaurant where  id=$id;";
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

	<form method="post" action="update_processrestaurant.php" >
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
			<label>Meal Name</label>
			<input type="text" name="mealname" value="<?php echo $row['mealname']; ?>">
		</div>
		<div class="input-group">
			<label>Quantity</label>
			<input type="text" name="quantity" value="<?php echo $row['quantity']; ?>">
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="price" value="<?php echo $row['price']; ?>">
		</div>
		<div class="input-group">
			<label>Order No.</label>
			<input type="text" name="ordernumber" value="<?php echo $row['ordernumber']; ?>">
		</div>
		
		<div class="input-group">
			<label>Waiter Service</label>
			<input type="text" name="waiterservice" value="<?php echo $row['waiterservice']; ?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update Restaurant Service Data</button>
		</div>
		


<form>
	</form>
</body>
</html>