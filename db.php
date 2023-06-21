<?php
$sname= "localhost";
$uname= "root";
$password = "";
$db_name = "loginsystem";
// connecting to the database
$conn = mysqli_connect($sname, $uname, $password, $db_name);
// condition that tests if connection is successful
if (!$conn) 
{
	die("Connection failed:" .mysqli_connect_error($conn));
  }

   {
	echo "Connection is succeesfully done!!!!!";
    }
?>