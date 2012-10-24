<?php
function authenticationPassed(){
	if (isset($_POST['username'])||isset($_POST['password'])){
		include 'databaseconnect.php';
		$sql="SELECT Password FROM Members WHERE Username= '".$_POST["username"]."'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		
		if (!$row){
			echo "Username does not exist. You may have mistyped it";
		}
		else{
			// check if entered password is the same as the one in the database
			//first encrypt the password because the password in database is encrypted
			$encryptedPassword=md5($_POST['password']);
			if ($encryptedPassword==$row['Password']){
				header("Location: index.php");
			}else{
				echo "Invalid username/password combination. Try again.";
			}
		}
	}
	else{
		echo "test";
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		
	</head>
	<body>
		<?php include 'menu.php'?>
			<div class="middle">
			<h1>Login</h1><br />
			<form name="login" action="login.php" method="POST">
			Username:<input name="username" id="username" type="text" /><br />
			Password:<input name="password" id="password" type="password" /><br />
			<input type="submit" value="Login" />
			<p class="warning id="wrongCredentials"><?php authenticationPassed()?></p>
			</form>
			</div>
			<div class="right">
			</div>
	</body>
</html>