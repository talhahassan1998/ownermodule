<?php 
$id=$_POST["id"];
$roomnumber=$_POST["roomnumber"];
$availabilitystatus=$_POST["availabilitystatus"];

$query="update availabilitystatus set roomnumber='$roomnumber',availabilitystatus='$availabilitystatus' where id=$id;";
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
		header("location: index1availabilitystatus.php");
		
	}

}
echo "<br>";

 ?>