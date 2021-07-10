<?php
	session_start();
	include_once('include\header.php');
?>

<div class="container">
	<div class="panel panel-primary" style="width: 800px;height: auto;">
			<div class="panel-heading">
			<h3 class="text-center">REGISTER</h3>
		</div>
		<div class="panel-body">
		
		<form action="register_db.php" method="POST">

			<div class="form-group">
					<b>First Name :- </b>
					<input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required>
				</div>

				<div class="form-group">
					<b>Last Name :- </b>
					<input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" required>
				</div>

				<div class="form-group">
					<b>Contact No :- </b>
					<input type="text" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control" name="mobileno" placeholder="Enter Contact No" required>
				</div>


				<div class="form-group">
					<b>Email :-</label>
					<input type="text" class="form-control" name="email" placeholder="Enter Email" required>
				</div>

				<div class="form-group">
					<b>Password :- </b>
					<input type="Password" class="form-control" name="password" placeholder="Enter Password" required>
				</div>

				<div class="form-group">
					<b>City :- </b>
					<input type="text" class="form-control" name="city" placeholder="Enter City" required>
				</div>

				<input type="submit" class="btn btn-danger" name="submit" value="Register">
				
			</form>
	</div>
</div>
</div>

	
