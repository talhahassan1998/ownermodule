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
			<label>Date</label>
			<input type="date" name="date" value="">
		</div>
		<div class="input-group">
			<label>Employee ID</label>
			<input type="text" name="employeeid" value="">
		</div>
		<div class="input-group">
			<label>Employee Name</label>
			<input type="text" name="employeename" value="">
		</div>
		
		<div class="input-group">
			<label>Employee Gender:</label>
			<td> </td>
                    <td>
                        <input type="radio" name="employeegender" value="male" />Male
                        <input type="radio" name="employeegender" value="female" />Female
                        <input type="radio" name="employeegender" value="other" />Other
                    </td>
		</div>
		<div class="input-group">
			<label>Entry Time</label>
			<input type="text" name="employeeentrytime" value="">
		</div>
		<div class="input-group">
			<label>Exit Time</label>
			<input type="text" name="employeeexittime" value="">
		</div>
		<div class="input-group">
			<label>Performed Duty Hours</label>
			<input type="text" name="employeeperformeddutyhours" value="">
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
			<button class="btn" type="submit" name="save" >Save Employee Timing Details</button>
		</div>
		
		




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
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['employeeid']; ?></td>
			<td><?php echo $row['employeename']; ?></td>
			<td><?php echo $row['employeegender']; ?></td>
			<td><?php echo $row['employeeentrytime']; ?></td>
			<td><?php echo $row['employeeexittime']; ?></td>
			<td><?php echo $row['employeeperformeddutyhours']; ?></td>
			
			<td><?php echo $row['employeeposition']; ?></td>
			<td><?php echo $row['salary']; ?></td>
			<td>
				<a href="editstaffduty.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="deletestaffduty.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?> 
</table>
</body>
</html>