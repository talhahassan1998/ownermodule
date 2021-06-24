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
			<label>Date</label>
			<input type="date" name="date" value="">
		</div>
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
			<label>Customer Name</label>
			<input type="text" name="customername" value="">
		</div>
		<div class="input-group">
			<label>CNIC/Passport</label>
			<input type="text" name="cnicpassport" value="">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="customeraddress" value="">
		</div>
		<div class="input-group">
			<label>Customer Phone No.</label>
			<input type="text" name="customerphonenumber" value="">
		</div>
		
		<div class="input-group">
			<label>Amount</label>
			<input type="number" name="amount" value="">
		</div>
		<div class="input-group">
			<label>Vehicle Number</label>
			<input type="text" name="vehiclenumber" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save Reservation Details</button>
		</div>
		
		




	</form>
	<table style="width:100%" align="center">

	<thead>
		<tr>
			<th>Serial No.</th>
			<th>Date</th>
			<th>Bedroom Type</th>
			<th> Room Number</th>
			<th> Customer Name </th>
                    
               
                    <th> CNIC/Passport </th>
                    
<th> Address </th>
<th> Phone No. </th>
			<th>Amount</th>
			<th>Vehicle Number</th>
			
                   
		
                
             

                    
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
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['type']; ?></td>
			<td><?php echo $row['roomnumber']; ?></td>
			<td><?php echo $row['customername']; ?></td>
			<td><?php echo $row['cnicpassport']; ?></td>
			<td><?php echo $row['customeraddress']; ?></td>
			<td><?php echo $row['customerphonenumber']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['vehiclenumber']; ?></td>
			<td>
				<a href="editreservation.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="deletereservation.php?id=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?> 
</table>
</body>
</html>