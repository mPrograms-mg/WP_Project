<?php
	session_start();
	include_once('include\header.php');
?>

<div class="container">
	<div class="panel panel-primary" style="width: 800px;height: auto;">
		<div class="panel-heading" >
			<h3 class="text-center">CONTACT US</h3>
		</div>
		<div class="panel-body">
			 <form action="contact_db.php" method="POST">

			<div class="form-group">
					<b>Full Name :- </b>
					<input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
				</div>

				<div class="form-group">
					<b>Email :- </b>
					<input type="text" class="form-control" name="email" placeholder="Enter Email-id" required>
				</div>	

				<div class="form-group">
					<b>City :- </b>
					<input type="text" class="form-control" name="city" placeholder="Enter City" required>
				</div>	

				<div class="form-group">
					<b>Subject :- </b>
					<input type="text" class="form-control" name="subject" placeholder="Write Something" required>
				</div>	

				<input type="submit" class="btn btn-danger" name="submit" value="Submit">

		</form>	
		</div>
	</div>
</div>

	
