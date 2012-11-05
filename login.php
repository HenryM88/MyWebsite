<?php
include 'header.php';
?>
<h1>Login</h1><br />
<form name="login" action="login.php" method="POST">
Username:<input name="username" id="username" type="text" /><br />
Password:<input name="password" id="password" type="password" /><br />
<input type="submit" value="Login" />
<p class="warning" id="wrongCredentials">
	<?php 
	if (isset($_POST['username'])||isset($_POST['password'])){
		include 'databaseconnect.php';
		$sql="SELECT Password, Username, FirstName FROM members WHERE Username= '".$_POST["username"]."'";
		$result=mysql_query($sql) or die(mysql_error());
		$row=mysql_fetch_assoc($result);
		
		if (!$row){
			echo "Username does not exist. You may have mistyped it";
		}
		else{
			// check if entered password is the same as the one in the database
			//first encrypt the password because the password in database is encrypted
			$encryptedPassword=md5($_POST['password']);
			if ($encryptedPassword==$row['Password']){
				header("Location: forum.php");
				session_start();
				$_SESSION['firstName']=$row['FirstName'];
				$_SESSION['user']=$row['Username'];
			}else{
				echo "Invalid username/password combination. Try again.";
			}
		}
		mysql_close($con);
	}
	else{
		echo "test";
	}

		?>
		</p>
	</form>
<?php include 'footer.php'; ?>