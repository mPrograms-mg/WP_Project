<?php
	session_start();
	require_once('include\connection.php');



	$email=$_POST['email'];
	$password=$_POST['password'];
	

	$query="SELECT * FROM registration where email='$email' and password='$password'";
	$check=mysqli_query($con, $query);

	$rowcount=mysqli_num_rows($check);
	
	if($rowcount==0)
	{
		
      	$message = "Email and Password is Wrong";
    	echo "<script> alert('$message');
    	window.location.href='login.php';
    	</script>";
    	exit;
    	header("location:login.php?pg=login&&msg=fail");
	}
	else
	{
		$_SESSION['email']=$email;
		$message = "Login Successfully";
    	echo "<script> alert('$message');
    	window.location.href='home.php';
    	</script>";
    	exit;
    	header("location:home.php?pg=home&&msg=suc");
    	
	}
?>