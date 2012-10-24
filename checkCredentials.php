<?php 
include 'databaseconnect.php';
$sql="SELECT Password FROM MEMBERS WHERE Username= '".$_POST("username")."'";
$result=mysql_query($sql);
$rows=mysql_num_rows($result);
if ($rows==0){
	echo "Username does not exist.";
}
else{
	// check if entered password is the same as the one in the database
	if ($_POST['password']==$result){
		//open index page
	}else{
		echo "Invalid username/password combination. Try again.";
	}
}
echo "test";



?>