<!doctype html>
<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" href="css/admin-core.css" />
	</head>

	<body>
		<div id="tf-container">
			<form action="admin-login-verify.php" method="post">
				<div>Login</div>
				<div><input type="text" name="name" value="" placeholder="e.g. User" /></div>

				<div>Password</div>
				<div>
					<input type="password" name="password" placeholder="Enter your password here." />
				</div>
				<div>
					<input type="submit" value="Login" />
				</div>
			</form>

		</div>
	</body>
</html>
