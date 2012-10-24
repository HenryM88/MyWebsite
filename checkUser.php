<?php 
$q=$_GET["q"];
include 'databaseconnect.php';
$sql="SELECT * FROM members WHERE Username = '".$q."'";
$result = mysql_query($sql);
$rows = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if ($rows>0){
	echo "Sorry, that username is already in use.";
}
else{
	echo "Username is valid.";

}
?>