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
<link rel="stylesheet" type="text/css" href="availabilitystatusstyles.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>


	<form method="post" action="insert_processavailabilitystatus.php" >
	<div class="input-group">
			
		<div class="input-group">
			<label>Enter Room Number</label>
			<input type="text" name="roomnumber" value="">
		</div>
		<div class="input-group">
			<label>Availability Status</label>
			<input type="text" name="availabilitystatus" value="">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save Availability Status Details</button>
		</div>
		
		




	</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Room Number</th>
			<th>Availability Status</th>
			
			
                   
		
                
             

                    
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php
		$query="select * from availabilitystatus";
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
			<td><?php echo $row['roomnumber']; ?></td>
			<td><?php echo $row['availabilitystatus']; ?></td>
			<td>
				<a href="editavailabilitystatus.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="deleteavailabilitystatus.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?> 
</table>
</body>
</html>