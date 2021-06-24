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
</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Date</th>
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>Employee Gender</th>
                    
               
                    <th>Entry Time</th>
                    
<th> Exit Time </th>
<th> Performed Duty Hours</th>
<th> Position</th>
<th> Salary</th>
			
			
                   
		
                
             

                    
			
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
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['employeeid']; ?></td>
			<td><?php echo $row['employeename']; ?></td>
			<td><?php echo $row['employeegender']; ?></td>
			<td><?php echo $row['employeeentrytime']; ?></td>
			<td><?php echo $row['employeeexittime']; ?></td>
			<td><?php echo $row['employeeperformeddutyhours']; ?></td>
			
			<td><?php echo $row['employeeposition']; ?></td>
			<td><?php echo $row['salary']; ?></td>
			
		</tr>
	<?php } ?> 
</table>
</body>
</html>