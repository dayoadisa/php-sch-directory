<?php
/*
		file: login.php
		desc: used by mobileapplication
*/

include('db.php');
if(isset($_POST['email'])) $email=$_POST['email']; else $email='';
if(isset($_POST['password'])) $password=$_POST['password']; else $password='';
$sql="select email, password from user where email='$email' and password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "success"; //successfully logged in
}else {
	echo "failed";
}
$conn->close(); 
?>