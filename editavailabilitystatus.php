<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="availabilitystatusstyles.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>
	<center><H1>Update Record</H1></center>
	<?php 
		$id=$_GET["edit"];
		
		$query="select * from availabilitystatus where  id=$id;";
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

	<form method="post" action="update_processavailabilitystatus.php" >
	<div class="input-group">
			<label>Serial No.</label>
			<input type="text"  name="id" value="<?php echo $row['id']; ?>">
		</div>
	
		<div class="input-group">
			<label>Room Number</label>
			<input type="text" name="roomnumber" value="<?php echo $row['roomnumber']; ?>">
		</div>
		<div class="input-group">
			<label>Availability Status</label>
			<input type="text" name="availabilitystatus" value="<?php echo $row['availabilitystatus']; ?>">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update Availability Status Details</button>
		</div>
		


<form>
	</form>
</body>
</html>