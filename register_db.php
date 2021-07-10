<?php
	require_once('include\connection.php');

	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mobileno=$_POST['mobileno'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city=$_POST['city'];
	
	$query="insert into registration(firstname,lastname,mobileno,email,password,city) values('$firstname','$lastname','$mobileno','$email','$password','$city')";

	$check=mysqli_query($con, $query);

	if($check)
	{
		$message = "Registration Successfully";
    	echo "<script> alert('$message');
    	window.location.href='login.php';
    	</script>";
    	exit;
		header("location:login.php?pg=login&&msg=suc");
	}
	else
	{
		$message = "Not Registration";
    	echo "<script> alert('$message');
    	window.location.href='home.php';
    	</script>";
    	exit;
		header("location:register.php?pg=reg&&msg=fail");
	}



?>