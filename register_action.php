<?php 
	include 'db.php';
	
	$email = $_POST['email'];
	$password1 = md5($_POST['password1']);
	$password2 = md5($_POST['password2']);
	$name = $_POST['name'];
	$date_of_birth = $_POST['date_of_birth'];
	$info = $_POST['info'];
	
	if ($password1 != $password2) {
		include "src/header.php";
		include "src/mainmenu.php";
		echo '<p>Error: password does not match. Try again</a>';
		echo '<p><a href="register.php">Try again</p>';
		include "src/footer.php";
		exit;
	}
	
	$sql = "INSERT INTO users (name, info, date_of_birth, email, password) VALUES ('$name', '$info', '$date_of_birth', '$email', '$password1');";
	$result = mysql_query($sql, $link);
	
	if ($result == false) {
		include "src/header.php";
		include "src/mainmenu.php";
		echo '<p>Error: cannot execute query</p>';
		echo '<p><a href="register.php">Try again</a></p>';
		include "src/footer.php";
		exit;
	}
	else {
		header('Location: private.php');
	}

	mysql_close($link);
?>