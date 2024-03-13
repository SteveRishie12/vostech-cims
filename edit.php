<?php
include "db_connection.php";
 if (isset($_POST['submit'])) {
 $VaccineID = $_POST['VaccineID'];
 $VaccineName = $_POST['VaccineName'];
 $AdminMethod = $_POST['AdminMethod'];
 $bodysite = $_POST['bodysite'];
 $gender = $_POST['gender'];
 $VaccineAge = $_POST['VaccineAge'];
 $sql = "UPDATE `vaccines` SET 
`VaccineName`='$VaccineName',`AdminMethod`='$AdminMethod',`bodysite`='$bodysite',`gender`='$gender',`vaccineAge`='$VaccineAge' WHERE `VaccineID`='$VaccineID'";
 $result = $conn->query($sql);
 if ($result == TRUE) {
 echo "Record updated successfully.";
 }else{
 echo "Error:" . $sql . "<br>" . $conn->error;
 }
 }
 $previous = $_SERVER['HTTP_REFERER'];
 header("Location: $previous");
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