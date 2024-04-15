<?php 

session_start();

include('config.php');

$fetchMySessionUser = mysqli_query($config,"SELECT * FROM institute_directory WHERE institute_uid = '{$_SESSION['instSession']}'");
while($row = mysqli_fetch_assoc($fetchMySessionUser))
{
	$userID = $row['institute_uid'];
	$institute = $row['institute_name'];
}

echo "Welcome to Dashboard". $institute ;

?>