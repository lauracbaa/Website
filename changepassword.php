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

<div class="ChangePassword">
			<label><b>Original Password</b></label>
			<input type="password" placeholder="Enter Password" name="pw1" required>

			<label><b>New Password</b></label>
			<input type="password" placeholder="Enter Password" name="pw1" required>

			<label><b>Confirm New Password</b></label>
			<input type="password" placeholder="Enter Password" name="pw2" required>
			<button type="submit">Confirm</button>
					
		</div>

<?php
	include "footer.php";
?>