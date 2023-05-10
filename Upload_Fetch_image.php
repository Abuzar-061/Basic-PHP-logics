<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		.container {
			width: 400px;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
		}
		h1 {
			text-align: center;
		}
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
		}
		input[type="email"], input[type="password"] {
			padding: 10px;
			margin: 10px;
			width: 100%;
			border: none;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			font-size: 1.1em;
			font-family: Arial, sans-serif;
			color: #333;
			outline: none;
		}
		input[type="submit"] {
			padding: 10px 20px;
			margin: 10px;
			border: none;
			border-radius: 5px;
			background-color: #2ecc71;
			color: #fff;
			font-size: 1.1em;
			font-family: Arial, sans-serif;
			cursor: pointer;
			outline: none;
		}
		input[type="submit"]:hover {
			background-color: #27ae60;
		}
		img {
			width: 100px;
			height: 100px;
			border-radius: 50%;
			object-fit: cover;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form action="Upload.php" method="post">
			<input type="email" name="email" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required>
			<input type="submit" value="Login">
		</form>
		
	</div>
</body>
</html>
