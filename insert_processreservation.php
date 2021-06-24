<?php 
$date=$_POST["date"];
$type=$_POST["type"];
$roomnumber=$_POST["roomnumber"];
$customername=$_POST["customername"];
$cnicpassport=$_POST["cnicpassport"];
$customeraddress=$_POST["customeraddress"];
$customerphonenumber=$_POST["customerphonenumber"];

$amount=$_POST["amount"];
$vehiclenumber=$_POST["vehiclenumber"];
$query="insert into info(date, type, roomnumber, customername,cnicpassport,customeraddress,customerphonenumber,amount,vehiclenumber) values ('$date', '$type', '$roomnumber', '$customername','$cnicpassport','$customeraddress','$customerphonenumber','$amount','$vehiclenumber')";
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