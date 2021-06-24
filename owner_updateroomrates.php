<?php 
$id=$_POST["id"];

$type=$_POST["type"];
$roomnumber=$_POST["roomnumber"];

$amount=$_POST["amount"];

$query="update info set  type='$type', roomnumber='$roomnumber',  amount='$amount' where id=$id;";
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
		header("location: owner_roomrate.php");
		
	}

}
echo "<br>";

 ?>