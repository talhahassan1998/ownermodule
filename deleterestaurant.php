<?php 
$id=$_GET["id"];
$query="delete from restaurant where id=$id;";
$conn=mysqli_connect("localhost", "root", "");
if(mysqli_connect_error())
{
	echo "failed to connect to Mysql ". mysqli_connect_error();
}

if ($conn) {
	echo "connected to server";
	echo "<br>";
	if (mysqli_select_db($conn, "crud"))
	 {
		echo "database selected successfully";
		echo "<br>";
		$result=mysqli_query($conn, $query);
		header("location: index1restaurant.php");
	}
}
echo "Deleted ". $result;


 ?>