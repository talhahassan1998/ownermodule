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
		
		$query="select * from staffdutytimings where  id=$id;";
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

	<form method="post" action="update_processownereditstaff.php" >
	<div class="input-group">
			<label>Serial No.</label>
			<input type="text"  name="id" value="<?php echo $row['id']; ?>">
		</div>
	
		<div class="input-group">
			<label>Employee ID</label>
			<input type="text" name="employeeid" value="<?php echo $row['employeeid']; ?>">
		</div>
		<div class="input-group">
			<label>Position</label>
			<input type="text" name="employeeposition" value="<?php echo $row['employeeposition']; ?>">
		</div>
		
		
		<div class="input-group">
			<label>Salary</label>
			<input type="text" name="employeesalary" value="<?php echo $row['salary']; ?>">
		</div>

		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update Data</button>
		</div>
		


<form>
	</form>
</body>
</html>