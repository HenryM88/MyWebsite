<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css" />
		<script type="text/javascript" src="Suscribe.js"></script>
	</head>
	<body>
		<?php include 'menu.php'?>
			<div class="middle">
			You can suscribe to this website to obtain future updates from me. Just provide the listed info below.
			When submit is pressed, Ajax will be used to validate the fields. <br />
			<b>Tests:</b> <br />
			First and Last names must not be blank <br />
			Passwords must match and be at least 8 characters long. <br />
			Sex must be selected. <br />
			Email must have @ and must match. <br />
			<br /> <br />
			<form name="suscribe" action="success.php" onsubmit="return pageCheck()" method="POST">
				First name: <input type="text" name="firstName" id="firstName" onchange="checkFirstName(this.value)">
				<span class="warning" id="checkFirst"></span><br />
				Last name: <input type="text" name="lastName" id="lastName" onchange="checkLastName(this.value)">
				<span class="warning" id="checkLast"></span><br />
				Password: <input id="pass" name="password" type="password" onchange="checkPass()"> 
				Confirm Password: <input id="confirmPass" type="password" onchange="checkPass()"><br />
				<p class="warning" id="passCheck"></p>
				Sex:
				<input type="radio" name="sex" id="male" value="male">Male
				<input type="radio" name="sex" id="female" value="female">Female<br />
				<p class="warning" id="sexCheck"></p>
				Email address: <input id="email" name="email" type="text" onchange="checkEmail(this.value)"> 
				Confirm Email: <input id="confirmEmail" type="text" onchange="checkEmail(this.value)"><br />
				<p class="warning" id="emailCheck"></p>
				<input type="submit" value="Submit">
				<button type="button" onclick="test()">Test</button>
				<p id="test"></p>
			</form>
			
			</div>
			<div class="right">
			</div>
	</body>
</html>