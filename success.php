<?php 
session_start();
$_SESSION['user']=$_POST['username'];
$_SESSION['firstName']=$_POST['firstName'];
include 'databaseconnect.php';
$encryptedPassword=md5($_POST['password']);
mysql_query("INSERT INTO members (Username, FirstName, LastName, Password, Email, Sex) VALUES (
'$_POST[username]',
'$_POST[firstName]',
'$_POST[lastName]',
'$encryptedPassword',
'$_POST[sex]',
'$_POST[email]')");

mysql_close($con);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		<title>My Website</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php include 'menu.php'?>
			<div class="middle">
			<h1><?php echo "Congratulations, you are now a member ". $_POST["username"]?></h1>
			<h3>Login function and forums coming soon.</h2>
			<?php echo "First Name: " .$_POST["firstName"] . "<br />";
			echo "Username: " .$_POST["username"] . "<br />";
			echo "Last Name: " .$_POST["lastName"] . "<br />";
			echo "Encrypted Password: " .$encryptedPassword . "<br />";
			echo "Sex: " .$_POST["sex"] . "<br />";
			echo "Email: " .$_POST["email"] . "<br />";
			?>
<?php include 'footer.php'; ?>