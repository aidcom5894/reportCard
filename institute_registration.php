<?php 

include('config.php');
include('ui_masterheader.php');

?>


<div class="container" style="margin-top: 25px;">
	
<form method="POST">

<div class="mb-3">
<label class="form-label">Institute Name:</label>
<input type="text" class="form-control" name="instituteName">
</div>

<div class="mb-3">
<label class="form-label">Director's Name:</label>
<input type="text" class="form-control" name="directorName">
</div>

<div class="mb-3">
<label class="form-label">Institute Email:</label>
<input type="text" class="form-control" name="instituteEmail">
</div>

<div class="mb-3">
<label class="form-label">Institute Password:</label>
<input type="password" class="form-control" name="institutePassword">
</div>

<div class="mb-3">
<label class="form-label">Institute Contact:</label>
<input type="number" class="form-control" name="instituteContact" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;">
</div>

<?php 

$uidCombination = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0125346789';
$generatedChar = substr(str_shuffle($uidCombination),1,5);

$fetchRegInst = mysqli_query($config,"SELECT * FROM institute_directory");

$instCount = mysqli_num_rows($fetchRegInst)+1;

?>
<div class="mb-3">
<label class="form-label">Institute UID:</label>
<input type="text" class="form-control" name="instUID"  value="<?php echo "INS".$instCount."-".date('my').$generatedChar; ?>" readonly>
</div>

<?php 

$emblemLogo = array('emblem1.png','emblem2.png','emblem3.png','emblem4.png','emblem5.png');

$generatedLogo = $base_address."images/emblem/".$emblemLogo[array_rand($emblemLogo,1)];


?>

<div class="mb-3">

<figure class="figure">

  <img src="<?php echo $generatedLogo; ?>" class="figure-img img-fluid rounded" alt="..." style="width: 150px; height: 150px;">
   <figcaption class="figure-caption">System Generated Random Logo</figcaption>
</figure>
</div>




<button type="submit" class="btn btn-primary form-control" name="registerInstitute">Submit</button>
</form>


</div>




<?php 

// verifying characters
$instituteName = $_POST['instituteName'];
$directorName = $_POST['directorName'];
$instituteEmail = $_POST['instituteEmail'];
$institutePassword = $_POST['institutePassword'];
$instContact = $_POST['instituteContact'];
$instUID = $_POST['instUID'];
$instLogo = $generatedLogo;

$matchUniqueEmail = mysqli_query($config,"SELECT * FROM institute_directory WHERE institute_email='$instituteEmail' OR institute_contact = '$instContact'");

if(isset($_POST['registerInstitute']))
{
   if(mysqli_num_rows($matchUniqueEmail)>0)
   {
   	echo "<script>alert('Duplicate Email or Contact Found! Please enter another Email')</script>";
   	echo "<script>window.location.href='institute_registration.php'</script>";
   	header("Refresh:0; url=institute_registration.php");
   }
 
   else
   {
   	$registerInstitute = mysqli_query($config,"INSERT INTO institute_directory(institute_name,director_name,institute_email,institute_password,institute_contact,institute_uid,institute_logo) VALUES('$instituteName','$directorName','$instituteEmail','$institutePassword','$instContact','$instUID','$instLogo')");
   	echo "<script>alert('Institute Successfully Registered. Please Login to access the Portal')</script>";
   	echo "<script>window.location.href='institute_login.php?institute_uid=$instUID'</script>";
   }

}

?>


<?php 

include('ui_masterfooter.php');

?>