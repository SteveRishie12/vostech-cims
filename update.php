<?php
include "db_connection.php";
 if (isset($_POST['submit'])) {
 $VaccineID = $_POST['VaccineID'];
 $VaccineName = $_POST['VaccineName'];
 $AdminMethod = $_POST['AdminMethod'];
 $bodysite = $_POST['bodysite'];
 $gender = $_POST['gender'];
 $VaccineAge = $_POST['vaccineAge'];
 $sql = "UPDATE `vaccines` SET 
`VaccineName`='$VaccineName',`adminmethod`='$AdminMethod',`bodysite`='$bodysite',`gender`='$gender',`vaccineAge`='$VaccineAge' WHERE `VaccineID`='$VaccineID'";
 $result = $conn->query($sql);
 if ($result == TRUE) {
 echo "Record updated successfully.";
 }else{
 echo "Error:" . $sql . "<br>" . $conn->error;
 }
 }
if (isset($_GET['id'])) {
 $VaccineID = $_GET['id'];
}
 $sql = "SELECT * FROM `vaccines` WHERE `VaccineID`='$VaccineID'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) { 
 while ($row = $result->fetch_assoc()) {
 $VaccineName = $row['VaccineName'];
 $AdminMethod = $row['AdminMethod'];
 $bodysite = $row['bodysite'];
 $gender = $row['gender'];
 $VaccineAge = $row['vaccineAge'];
 $VaccineID = $row['VaccineID'];
 }}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
 
</head>
<body> 
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#parentemail").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body style="background-image:url('b1.jpg'); background-repeat: no-repeat; background-size: cover; background-filter: blur(8px); background-position: center;
  " class="hold-transition login-page">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 style="color: red; padding-left: 570px" class="mainTitle">Admin | Register Vaccine</h1>
</div>

</div>
</section>
<div style="padding-left: 500px;" class="container-fluid container-fullw bg-skyblue">
<div class="row">
<div class="col-md-12">
<div class="row margin-top-30">
<div class="col-lg-8 col-md-12">
<div class="panel panel-white">
<div class="panel-heading">
<h5 class="panel-title">Update vaccine</h5>
</div>
<div class="panel-body">
<form role="form" name=""action ="edit.php" method="post">
<div class="form-group">
<label for="admin">
Vaccine ID
</label>
<input type="text" name="VaccineID" class="form-control"  value = "<?php echo "$VaccineID";?>" required="true">
</div>
<div class="form-group">
<label for="admin">
Vaccine Name
</label>
<input type="text" name="VaccineName" class="form-control"   value = "<?php echo "$VaccineName";?>" required="true">
</div>
<div class="form-group">
<label for="fess">
 Vaccine administration method.
</label>
<input type="text" name="AdminMethod" class="form-control" value = "<?php echo "$AdminMethod";?>" required="true" >
</div>
<div class="form-group">
<label for="fess">
Body site
</label>
<input type="text" id="bodysite" name="bodysite" class="form-control" value = " <?php echo "$bodysite";?>" required="true" onBlur="userAvailability()">
<span id="user-availability-status1" style="font-size:12px;"></span>
</div>
<div class="form-group">
<label class="block">
Child Gender
</label>
<div class="clip-radio radio-primary">
<input type="radio" id="rg-female" name="gender" value="female" >
<label for="rg-female">
Female
</label>
<input type="radio" id="rg-male" name="gender" value="male">
<label for="rg-male">
Male
</label>
<input type="radio" id="rg-both" name="gender" value="both">
<label for="rg-male">
Both
</label>
</div>
</div>
<div class="form-group">
<label for="age">
 Child Age
</label>
<input type="text" name="VaccineAge" class="form-control"  value = " <?php echo "$VaccineAge";?>" required="true">
</div>
<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
Update
</button>
<a href="display.php" class="btn btn-o btn-primary">View Vaccinations Here</a>
  
 </form>
 </body>
 </html>
  