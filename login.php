<?php 
	$title = "welcome";
	include "header.php";
?>
<style>
	<?php 
		include "main.css";
	?>
</style>

	
				<div class="LoginPage">
					
					<label><b>Username</b></label>
					<input type="user" placeholder="Enter Username" name="user" required>

					<label><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="pw1" required>

					<button type="submit">Login</button>
					<button type="Register">Create Account</button>
					<input type="checkbox" checked="checked"> Remember me
				
				</div>

<?php
	include "footer.php";
?>