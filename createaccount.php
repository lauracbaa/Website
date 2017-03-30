<?php 
	$title = "welcome";
	include "header.php";
	include "menubar.php";
?>
<style>
	<?php 
		include "main.css";
	?>
</style>

<div class="Register">
			
					<label><b>Name</b></label>
					<input type="name" placeholder="Enter Name" name="name1" required>
					
					<label><b>Surname</b></label>
					<input type="surname" placeholder="Enter Surname" name="surname" required>
					
					<label><b>Email</b></label>
					<input type="email" placeholder="Enter email" name="email" required>
					
					<label><b>Username</b></label>
					<input type="text" placeholder="Enter Username" name="user" required>
					
					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pw1" required>
					
					<label><b>Confirm Password</b></label>
					<input type="password" placeholder="Enter Password" name="pw2" required>
					
					<button type="submit">Create Account</button>
					<button type="cancel">Cancel</button>

<?php
	include "footer.php";
?>