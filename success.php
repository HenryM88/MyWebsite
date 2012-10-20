<?php include 'databaseconnect.php';
mysql_query("INSERT INTO MEMBERS (FirstName, LastName, Password, Email, Sex) VALUES (
'$_POST[firstName]',
'$_POST[lastName]',
'$_POST[password]',
'$_POST[sex]',
'$_POST[email]')");

mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('Glenn', 'Quagmire',33)");
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css" />
	</head>
	<body>
		<?php include 'menu.php'?>
			<span class="middle">
			<h1><?php echo "Congratulations, you are now a member ". $_POST["firstName"]?></h1>
			<h3>Login function and forums coming soon.</h2>
			<?php echo "First Name: " .$_POST["firstName"] . "<br />";
			echo "Last Name: " .$_POST["lastName"] . "<br />";
			echo "Password: " .$_POST["password"] . "<br />";
			echo "Sex: " .$_POST["sex"] . "<br />";
			echo "Email: " .$_POST["email"] . "<br />";
			?>
			</span>
			<div class="right">
			</div>
	</body>
</html>