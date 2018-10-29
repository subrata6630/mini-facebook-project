<?php
	session_start();
	
	include "src/header.php";
	include "src/mainmenu.php";
?>
	<form method="post" action="register_action.php">
	<fieldset>
	<legend>Register</legend>
	<p>
		<label for="name">Full name:</label> <input type="text" name="name" id="name" /> 
	<br>
		<label for="email">Email:</label> <input type="email" name="email" id="email" /> 
	<br>
		<label for="password1">Password:</label> <input type="password" name="password1" id="password1" />
	<br>
		<label for="password2">Confirm password:</label> <input type="password" name="password2" id="password2" />
	<br>
		<label for="date_of_birth">Date of birth (yyyy-mm-dd):</label> <input type="date" name="date_of_birth" id="date_of_birth" />
	<br>
		<label for="place_of_birth">Place of birth:</label> <input type="text" name="place_of_birth" id="place_of_birth" />
	<br>
		<label for="info">Information:</label> <textarea name="info" id="info" rows="5" cols="50"></textarea>
	<br>
		<label for="nationality">Nationality:</label> <input type="text" name="nationality" id="nationality" />
	</p>
	
	<p class="center"><input value="Register" type="submit" /></p>
	</fieldset>
	</form>
<?php	
	include "src/footer.php";
?>