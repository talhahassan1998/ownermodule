<?php 
$id=$_POST["id"];
$date=$_POST["date"];

$roomnumber=$_POST["roomnumber"];
$mealname=$_POST["mealname"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$ordernumber=$_POST["ordernumber"];

$waiterservice=$_POST["waiterservice"];
$query="update restaurant set date='$date', roomnumber='$roomnumber', mealname='$mealname',quantity='$quantity',price='$price',ordernumber='$ordernumber', waiterservice='$waiterservice' where id=$id;";
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