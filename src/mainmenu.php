<nav>
<ul id="main_menu">
	<li><a href="register.php" title="Register new user">Register</a></li>
	<li><a href="search.php" title="Users list">Search</a></li>
	<li><a href="login.php" title="Login private area">Login</a></li>
	<?php
	  if(isset($_SESSION['login']) && $_SESSION['login'] == "OK") {
		echo '<li><a href="private.php" title="Private area">Private</a></li>';
		echo '<li style="padding-left: 40px">' . $_SESSION['username'] . '</li>';
	  }
	?>
</ul>
</nav>
