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

	<form method="post" action="update_processstaffduty.php" >
	<div class="input-group">
			<label>Serial No.</label>
			<input type="text"  name="id" value="<?php echo $row['id']; ?>">
		</div>
	<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="<?php echo $row['date']; ?>">
		</div>
		<div class="input-group">
			<label>Employee ID</label>
			<input type="text" name="employeeid" value="<?php echo $row['employeeid']; ?>">
		</div>
		<div class="input-group">
			<label>Employee Name</label>
			<input type="text" name="employeename" value="<?php echo $row['employeename']; ?>">
		</div>
		<div class="input-group">
			<label>Gender</label>
			<input type="text" name="employeegender" value="<?php echo $row['employeegender']; ?>">
		</div>
		<div class="input-group">
			<label>Entry Time</label>
			<input type="text" name="employeeentrytime" value="<?php echo $row['employeeentrytime']; ?>">
		</div>
		<div class="input-group">
			<label>Exit Time</label>
			<input type="text" name="employeeexittime" value="<?php echo $row['employeeexittime']; ?>">
		</div>
		<div class="input-group">
			<label>Performed Duty Hours</label>
			<input type="text" name="employeeperformeddutyhours" value="<?php echo $row['employeeperformeddutyhours']; ?>">
		</div>
		
		<div class="input-group">
			<label>Position</label>
			<input type="text" name="employeeposition" value="<?php echo $row['employeeposition']; ?>">
		</div>
		<div class="input-group">
			<label>Salary</label>
			<input type="text" name="salary" value="<?php echo $row['salary']; ?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Update Data</button>
		</div>
		


<form>
	</form>
</body>
</html>