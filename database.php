<?php
$servername="localhost";
$username="root";
$password="";
$database="car rental system";
$con = mysqli_connect ($servername,$username,$password,$database);
//$con =mysqli_connect("localhost", "root","root" ,"registration form");
if(!$con)
{
	die("error detected ".mysqli_error($con));
}
else
{
	echo"conection established successfully";
}
?>
