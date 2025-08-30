<?php
if($_SERVER['REQUEST_METHOD'] !== "POST"){
	die("Invalid Request");
}
include('include/dbconfig.php');
$server_id = $_POST['server_id'];
mysqli_query($con, "DELETE FROM servers WHERE server_id=$server_id") or die(mysqli_error($con));
if(mysqli_affected_rows($con) > 0){
	echo "Server Deleted Successfully!";
} else {
	echo "Unable to delete server!";
}

?>