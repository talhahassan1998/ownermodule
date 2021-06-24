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
<link rel="stylesheet" type="text/css" href="stylesforgmownerreport.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>


	
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Month/Year</th>
			<th>Electricity Bill</th>
			<th>Gas Bill</th>
			
                   
		
                
             

                    
			
		</tr>
	</thead>
	
	<?php
		$query="select * from expenditures";
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
			<td><?php echo $row['monthyear']; ?></td>
			<td><?php echo $row['electricitybill']; ?></td>
			<td><?php echo $row['gasbill']; ?></td>
			
		</tr>
	<?php } ?> 
</table>
</body>
</html>