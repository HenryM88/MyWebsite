<?php include 'databaseconnect.php';
include 'header.php'; ?>
			You can suscribe to this website to obtain future updates from me. Just provide the listed info below.
			When submit is pressed, Ajax will be used to validate the fields. <br />
			<b>Tests:</b> <br />
			First and Last names must not be blank <br />
			Passwords must match and be at least 8 characters long. <br />
			Sex must be selected. <br />
			Email must have @ and must match. <br />
			<br /> <br />
			<form name="suscribe" action="success.php" autocomplete="off" onsubmit="return pageCheck()" method="POST">
				Username : <input type="text" name="username" id="username" onchange="checkUsername(this.value)">
				<p id="userCheck"></p>
				First name: <input type="text" name="firstName" id="firstName" onchange="checkFirstName(this.value)">
				<p class="warning" id="checkFirst"></p>
				Last name: <input type="text" name="lastName" id="lastName" onchange="checkLastName(this.value)">
				<p class="warning" id="checkLast"></p>
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
			
<?php include 'footer.php'; ?>