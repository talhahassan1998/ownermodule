<?php 
$id=$_POST["id"];
$date=$_POST["date"];
$type=$_POST["type"];
$roomnumber=$_POST["roomnumber"];
$customername=$_POST["customername"];
$cnicpassport=$_POST["cnicpassport"];
$customeraddress=$_POST["customeraddress"];
$customerphonenumber=$_POST["customerphonenumber"];
$amount=$_POST["amount"];
$vehiclenumber=$_POST["vehiclenumber"];
$query="update info set date='$date', type='$type', roomnumber='$roomnumber', customername='$customername',cnicpassport='$cnicpassport',customeraddress='$customeraddress',customerphonenumber='$customerphonenumber', amount='$amount', vehiclenumber='$vehiclenumber' where id=$id;";
$conn=mysqli_connect("localhost", "root", "");
if(mysqli_connect_error())
{
	echo "failed to connect to mysql: ".mysqli_connect_error() ;
}
if($conn)
{
	echo "connect to local host";
	echo "<br>";
	if(mysqli_select_db($conn, "crud"))
	{
		$result=mysqli_query($conn, $query);
		header("location: index1reservation.php");
		
	}

}
echo "<br>";

 ?>