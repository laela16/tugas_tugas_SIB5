<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<form method="POST" action="form_login.php">
		<label for="username">Username:</label><br>
		<input type="text" id="username" name="username"><br>
		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Submit">
	</form>

<?php
function cekLogin($username, $password) {
	if ($username == "admin" && $password == "mimin") {
		header("Location: admin.php");
		exit();
	}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	cekLogin($username, $password);
}
?>

</body>
</html>
