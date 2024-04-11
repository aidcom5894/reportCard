<?php 

include('config.php');
include('ui_masterheader.php');

$uniqueID = $_GET['institute_uid'];

?>


<div class="container" style="margin-top:25px;">

<form method="POST">

<div class="mb-3">
<label class="form-label">Institute Unique ID:</label>
<input type="text" class="form-control" name="instituteUID" readonly value="<?php echo $uniqueID; ?>">
</div>

<div class="mb-3">
<label class="form-label">Institute Email:</label>
<input type="email" class="form-control" name="instituteEmail">
</div>

<div class="mb-3">
<label class="form-label">Institute Password:</label>
<input type="password" class="form-control" name="institutePassword">
</div>


<button type="submit" class="btn btn-primary form-control" name="instLogin">Login</button>
</form>

</div>

<?php 
$instUniqueID = $_POST['instituteUID'];
$instEmail = $_POST['instituteEmail'];
$instPassword = $_POST['institutePassword'];

$matchCredentials = mysqli_query($config,"SELECT * FROM institute_directory WHERE institute_uid='$instUniqueID' AND institute_email = '$instEmail' AND institute_password = '$instPassword'");

if(isset($_POST['instLogin']))
{
	if(mysqli_num_rows($matchCredentials)>0)
	{
		session_start();

		$_SESSION['activeInst'] = $instUniqueID;

		echo "<script>alert('Credentials Verified. Now Loging to Portal')</script>";

		echo "<script>windows.location.href='institute_dashboard.php'</script>";
	}
}

?>






<?php 

include('ui_masterfooter.php');

?>