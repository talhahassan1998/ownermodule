<?php 





$date=$_POST["date"];
$employeeid=$_POST["employeeid"];
$employeename=$_POST["employeename"];
$employeegender=$_POST["employeegender"];
$employeeentrytime=$_POST["employeeentrytime"];
$employeeexittime=$_POST["employeeexittime"];
$employeeperformeddutyhours=$_POST["employeeperformeddutyhours"];


$employeeposition=$_POST["employeeposition"];
$salary=$_POST["salary"];
$query="insert into staffdutytimings(date, employeeid, employeename, employeegender,employeeentrytime,employeeexittime,employeeperformeddutyhours,employeeposition,salary) values ('$date', '$employeeid', '$employeename', '$employeegender','$employeeentrytime','$employeeexittime','$employeeperformeddutyhours','$employeeposition','$salary')";
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