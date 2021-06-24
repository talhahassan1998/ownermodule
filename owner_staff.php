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


	<form method="post" action="insert_processstaffduty.php" >
	
		<div class="input-group">
			<label>Employee ID</label>
			<input type="text" name="employeeid" value="">
		</div>
		
		<div class="input-group">
			<label>Position</label>
			<input type="text" name="employeeposition" value="">
		</div>
			<div class="input-group">
			<label>Salary</label>
			<input type="text" name="salary" value="">
		</div>
		
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save Employee Details</button>
		</div>
		
		




	</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			
			<th>Employee ID</th>
			
<th> Position</th>
<th>Salary</th>
			
			
                   
		
                
             

                    
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php
		$query="select * from staffdutytimings";
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
			
			<td><?php echo $row['employeeid']; ?></td>
			

			
			<td><?php echo $row['employeeposition']; ?></td>
			<td><?php echo $row['salary']; ?></td>
			<td>
				<a href="owner_editstaff.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			
		</tr>
	<?php } ?> 
</table>
</body>
</html>