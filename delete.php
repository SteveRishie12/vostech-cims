<?php
include "db_connection.php";
if (isset($_GET['id'])) {
 $VaccineID = $_GET['id'];
 $sql = "DELETE FROM `vaccines` WHERE `VaccineID`='$VaccineID'";
 $result = $conn->query($sql);
 $previous = $_SERVER['HTTP_REFERER'];
 header("Location: $previous");
 if ($result == TRUE) {
 echo "Record deleted successfully.";
 }else{
 echo "Error:" . $sql . "<br>" . $conn->error;
 }
}
?>
