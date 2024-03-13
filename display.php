

<?php
include "db_connection.php";
$sql = "SELECT * FROM vaccines";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
 <title>View Page</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.cs">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<?php include('include/sidenav.html');?>
<div class="form" style =" background-color: purple; height: 50px; padding-radius:5px;">
<a href="form.php" class="btn btn-o btn-primary">Add vaccines here</a>
</div>
 <div class="body">
 <div class="heading">
 <h2>vaccines</h2>
</div>
<table class="table">
 <thead>
 <tr>
 <th> Vaccine Name |</th>
 <th> administration method |</th>
 <th> Body site |</th>
 <th> Gender |</th>
 <th> Vaccination age</th>
 <th> Action</th>
 </tr>
 </thead>
 <tbody>
 <?php
 if ($result->num_rows > 0) {
 while ($row = $result->fetch_assoc()) {
 ?>
 <tr>
 <td>  <?php echo $row['VaccineName']; ?> </td>
 <td>  <?php echo $row['adminMethod']; ?> </td>
 <td>  <?php echo $row['bodysite']; ?> </td>
 <td>  <?php echo $row['gender']; ?> </td>
 <td>  <?php echo $row['vaccineAge']; ?> </td>
 <td>  <a class="btn btn-info" href="update.php?id=<?php echo $row['VaccineID']; 
?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo 
$row['VaccineID']; ?>">Delete</a></td>
 </tr> 
 <?php }
 }
 ?> 
 </tbody>
</table>
 </div>
</body>
</html>
<?php include('footer.php'); ?>