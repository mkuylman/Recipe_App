<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<body>
	<h3>Login</h3>
	<form action="/login" method="post">
		<input type="email" name="email" placeholder="email">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="Login">
	</form>
	<?= $this->session->flashdata("login_errors"); ?>

	<h3>Register</h3>
	<form action="/register" method="post">
		<input type="text" name="first_name" placeholder="first name">
		<input type="text" name="last_name" placeholder="last name">
		<input type="text" name="username" placeholder="username">
		<input type="text" name="email" placeholder="email">
		<input type="password" name="password" placeholder="password">
		<input type="password" name="c_password" placeholder="confirm password">
		<input type="submit" name="Register">
	</form>
	<?= $this->session->flashdata("registration_errors"); ?>
</body>
</html>