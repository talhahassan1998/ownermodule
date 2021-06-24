<?php 




$date=$_POST["date"];
$roomnumber=$_POST["roomnumber"];
$mealname=$_POST["mealname"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$ordernumber=$_POST["ordernumber"];
$waiterservice=$_POST["waiterservice"];


$query="insert into restaurant(date, roomnumber, mealname,quantity,price,ordernumber,waiterservice) values ('$date', '$roomnumber', '$mealname','$quantity','$price','$ordernumber','$waiterservice')";
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
		header("location: index1restaurant.php");
	}

}
echo "<br>";

 ?>