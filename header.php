<?php 
session_start();
if(isset($_SESSION['user'])){
	if(isset($_SESSION['views'])){
		$_SESSION['views']=$_SESSION['views']+1;
	}else{
		$_SESSION['views']=1;
		}
	echo "Views=". $_SESSION['views'];
	//unhide logoff function in menu
	//end session
	//css for logoff
	
}
?>
