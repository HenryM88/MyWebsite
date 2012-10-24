<?php include 'databaseconnect.php';
include 'header.php'; ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		<script type="text/javascript" src="Suscribe.js"></script>
		<script src="jquery.js"></script>
		<script>
		var username=false;
		
		function checkUsername(user)
		{
			if (user=="") //user.length<1
			  {
			  document.getElementById("userCheck").innerHTML="Username field must not be empty.";
			  username=false;
			  return;
			  }
			if (window.XMLHttpRequest)
			  {// code for IE7+, Firefox, Chrome, Opera, Safari
			  xmlhttp=new XMLHttpRequest();
			  }
			else
			  {// code for IE6, IE5
			  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			xmlhttp.onreadystatechange=function()
			  {
			  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			    {
			    document.getElementById("userCheck").innerHTML=xmlhttp.responseText;
			    if (xmlhttp.responseText=="Username is valid."){
			    	document.getElementById("userCheck").style.color="green";
			    	}
			    else{
				    document.getElementById("userCheck").style.color="red";
			    	}
			    }
			  }
			xmlhttp.open("GET","checkUser.php?q="+user,true);
			xmlhttp.send();
			if(document.getElementById("userCheck").innerHTML==""){
				username=true;
			}
		}

		</script>
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
			
			</div>
			<div class="right">
			</div>
	</body>
</html>