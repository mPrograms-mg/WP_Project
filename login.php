<?php
	include_once('include\header.php');
?>

<div class="container">
	<div class="panel panel-primary" style="width: 800px;height: auto;">
			<div class="panel-heading">
			<h3 class="text-center">LOGIN</h3>
		</div>
		<div class="panel-body">
		
		<form action="checklogin.php" method="POST">
				<div class="form-group">
					<b>Email-id :- </b>
					<input type="text" class="form-control" name="email" placeholder="Enter Email-id" required>
        </div>

				<div class="form-group">
					<b>Password :- </b>
					<input type="Password" class="form-control" name="password" placeholder="Enter Password" required>
				</div>

				<input type="submit" class="btn btn-danger" name="submit" value="Login">
				
			</form>
	</div>
</div>
</div>

	
