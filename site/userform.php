<?php include 'includes/header.php'   

//Ignore this, used to test out PHP password hashing

?>

<form action="./includes/createUser.php" method="post">
	<p>Username:</p><input type="text" name="username">
	<p>Password:</p><input type="text" name="password">
	<input type="submit" name="submit" value="submit">
</form>

<?php include 'includes/footer.php' ?>