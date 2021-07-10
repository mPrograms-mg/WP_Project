<?php
	require_once('include\connection.php');

	$name=$_POST['name'];
	$email=$_POST['email'];
	$city=$_POST['city'];
	$subject=$_POST['subject'];
	
	$query="insert into contactus(name,email,city,subject) values('$name','$email','$city','$subject')";

	$check=mysqli_query($con, $query);

	if($check)
	{
		header("location:home.php");
	}
	else
	{
		header("location:contact.php");
	}
?>