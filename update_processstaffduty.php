<?php 

$id=$_POST["id"];
$date=$_POST["date"];
$employeeid=$_POST["employeeid"];
$employeename=$_POST["employeename"];
$employeegender=$_POST["employeegender"];
$employeeentrytime=$_POST["employeeentrytime"];
$employeeexittime=$_POST["employeeexittime"];
$employeeperformeddutyhours=$_POST["employeeperformeddutyhours"];
$salary=$_POST["salary"];


$employeeposition=$_POST["employeeposition"];


$query="update staffdutytimings set date='$date', employeeid='$employeeid', employeename='$employeename',employeegender='$employeegender',employeeentrytime='$employeeentrytime',employeeexittime='$employeeexittime',employeeperformeddutyhours='$employeeperformeddutyhours', employeeposition='$employeeposition',salary='$salary' where id=$id;";
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
		header("location: index1staffduty.php");
		
	}

}
echo "<br>";

 ?>