<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'report_card';

$config = mysqli_connect($hostname,$username,$password,$dbname);

$base_address = 'http://localhost/reportCard/';

if($config)
{
	// echo "<script>alert('Database Connection Successful')</script>";
}
else
{
	echo "Failed to Connect with Database".mysqli_connect_error();
}

?>