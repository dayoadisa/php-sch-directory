<?php

if(empty($_POST)) header('location:departments.php');
else{
 include('db.php');
 $title=$_POST['title'];
  $message=$_POST['message'];
 //check that department does not exist
 $sql="select title from event where title='$title' ";
 $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		//department name is already in use
		header("location:eventForm.php?error=true");
	}else{
		//department available, insert into table department
		$title=mysql_real_escape_string($title);
		$message=mysql_real_escape_string($message);
		$sql="insert into event(title, message) ";
		$sql.="values('$title','$message')";
		if($conn->query($sql)===TRUE){
			//insert was successful!
			header("location:index.php?insert=ok");
		}else header("location:eventForm.php?insert=error");
	}
}
?>