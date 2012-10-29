<?php 
$q=$_GET["q"];
include 'databaseconnect.php';
$sql="SELECT * FROM members WHERE Username = '".$q."'";
$result = mysql_query($sql);
$rows = mysql_num_rows($result);
$row=mysql_fetch_array($result);
if ($rows>0){
	echo "Sorry, that username is already in use. ";
}
/* doesn't work
$iChars ="!#$%^&*()+[]\\\';,./{}|\":<>? "; //allowing @
for ($i = 0; $i < $q.length; $i++) {
	if (strrpos($iChars,$q.charAt(i)) == true) {
		echo "Field contains invalid characters or white spaces";
		break;
	}
	echo "Username is valid.";
}*/
else{
	echo "Username is valid.";
}
mysql_close($con);
?>