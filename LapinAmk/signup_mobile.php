<?php
/*
	file:	signup_mobile.php
	
*/
header("access-control-allow-origin: *");
include('db.php');
$error=false;

if(isset($_POST['name'])) $name=$_POST['name']; else $error=true;
if(isset($_POST['email'])) $email=$_POST['email']; else $error=true;
if(isset($_POST['password'])) $password=$_POST['password']; else $password='';


if(!$error){
	$sql="insert into users(name,email,password) ";
	$sql.="values('$name','$email','$password)";
	if($conn->query($sql)===TRUE){
			//insert was successful!
			echo "success";
		}else echo "failed to insert";
}else echo "failed with fields";
?>