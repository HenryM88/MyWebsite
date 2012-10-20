<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css" />
	</head>
	<body>
		<?php include 'menu.php'?>
			<div class="middle">
			<h1>Login</h1><br />
			<form name="login" action="logSuccess.php" onsubmit="return logCheck()" method="POST">
			Username:<input name="username" id="username" type="text" /><br />
			Password:<input name="password" id="password" type="text" /><br />
			<input type="submit" value="Login" />
			</form>
			</div>
			<div class="right">
			</div>
	</body>
</html>