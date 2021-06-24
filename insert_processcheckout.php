<?php 




$date=$_POST["date"];
$roomnumber=$_POST["roomnumber"];
$customername=$_POST["customername"];
$customercnicpassport=$_POST["customercnicpassport"];
$customerroomrent=$_POST["customerroomrent"];
$customerrestaurantbill=$_POST["customerrestaurantbill"];
$customertotalbill=$_POST["customertotalbill"];
$customerstatus=$_POST["customerstatus"];

$query="insert into checkoutdetails(date,roomnumber,customername,customercnicpassport,customerroomrent,customerrestaurantbill,customertotalbill,customerstatus) values ('$date', '$roomnumber', '$customername','$customercnicpassport','$customerroomrent','$customerrestaurantbill','$customertotalbill','$customerstatus')";
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
		header("location: index1checkout.php");
	}

}
echo "<br>";

 ?>