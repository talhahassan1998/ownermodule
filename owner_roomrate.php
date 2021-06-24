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


	<form method="post" action="insert_processreservation.php" >
	
		<div class="input-group">
			<label>Select Bedroom Type:</label>
			<td> </td>
                    <td>
                        <input type="radio" name="type" value="family" />family
                        <input type="radio" name="type" value="deluxe" />deluxe
                        
                    </td>
		</div>
		<div class="input-group">
			<label>Room Number</label>
			<input type="text" name="roomnumber" value="">
		</div>
		
		
		
		
		<div class="input-group">
			<label>Room Rate</label>
			<input type="number" name="amount" value="">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="save" >set rates</button>
		</div>
		
		




	</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Bedroom Type</th>
			<th> Room Number</th>
			
			<th>Amount</th>
			
			
                   
		
                
             

                    
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php
		$query="select * from info";
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
			
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['roomnumber']; ?></td>
			
			<td><?php echo $row['amount']; ?></td>
		
			<td>
				<a href="owner_editroomrates.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="deletereservation.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?> 
</table>
</body>
</html>