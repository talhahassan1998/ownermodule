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
<link rel="stylesheet" type="text/css" href="restaurantstyles.css">
	<title>CRUD: CReate, Update, Delete PHP MySQL</title>
</head>
<body>


	<form method="post" action="insert_processrestaurant.php" >
	<div class="input-group">
			<label>Date</label>
			<input type="date" name="date" value="">
		</div>
		
		<div class="input-group">
			<label>Room Number</label>
			<input type="text" name="roomnumber" value="">
		</div>
		<div class="input-group">
			<label>Meal Name</label>
			<input type="text" name="mealname" value="">
		</div>
		<div class="input-group">
			<label>Quantity</label>
			<input type="text" name="quantity" value="">
		</div>
		<div class="input-group">
			<label>Price</label>
			<input type="text" name="price" value="">
		</div>
		<div class="input-group">
			<label>Order No.</label>
			<input type="text" name="ordernumber" value="">
		</div>
		
		
		<div class="input-group">
			<label>Waiter Service</label>
			<input type="text" name="waiterservice" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save Restaurant Service Details</button>
		</div>
		
		




	</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Date</th>
			
			<th> Room Number</th>
			<th> Meal Name </th>
                    
               
                    <th> Quantity </th>
                    
<th> Price </th>
<th> Order No. </th>
			
			<th>Waiter Service</th> 
			
                   
		
                
             

                    
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php
		$query="select * from restaurant";
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
			<td><?php echo $row['roomnumber']; ?></td>
			<td><?php echo $row['mealname']; ?></td>
			<td><?php echo $row['quantity']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['ordernumber']; ?></td>
			
			
			<td><?php echo $row['waiterservice']; ?></td>
			<td>
				<a href="editrestaurant.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="deleterestaurant.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?> 
</table>
</body>
</html>