
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$con=mysqli_connect("localhost","admin_panel","abc!@#123","admin_VPN");
$msg=$_POST['msg'];

 
 
$sql="INSERT INTO `feedback`(`msg`) VALUES ('".$msg."')";
 if(mysqli_query($con,$sql)){
 echo("Yes");
 }else{
 echo("No");
 }
 
}
 
 
 
?>
