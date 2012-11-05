var pass=false, email=false, firstName=false, lastName=false;
var strInvalid="Field contains invalid characters or white spaces"; 

function checkFirstName(first){
	if (first.length<1){
		document.getElementById("checkFirst").innerHTML="First Name field must not be empty.";
		firstName=false;
	}
	else if(!checkSpecialCharactersPass(first)){
		document.getElementById("checkFirst").innerHTML=strInvalid;
		firstName=false;
	}
	else{
		document.getElementById("checkFirst").innerHTML="";
		firstName=true;
	}
}


function checkLastName(last){
	if (last.length<1){
		document.getElementById("checkLast").innerHTML="Last Name field must not be empty.";
		lastName=false;
	}
	else if(!checkSpecialCharactersPass(last)){
		document.getElementById("checkLast").innerHTML=strInvalid;
		firstName=false;
	}
	else{
		document.getElementById("checkLast").innerHTML="";
		lastName=true;
	}	
}

function checkPass(){
	pass=false;
	clearElement("passCheck");
	if (document.getElementById("pass").value.length<8){
		var node=document.createTextNode("Password needs to be at least 8 characters. ");
		document.getElementById("passCheck").appendChild(node);
	}
	if (document.getElementById("pass").value != document.getElementById("confirmPass").value){
		var node=document.createTextNode("Passwords do not match.");
		document.getElementById("passCheck").appendChild(node);
	}
	if (document.getElementById("passCheck").innerHTML==""){
		pass=true;
	}
}


function checkEmail(e){
	//if email not empty, check for @ sign
	email=true;
	clearElement("emailCheck");
	if (e!=null){
		if ((e.indexOf("@")==-1)||(e.length<=6)){
			var node=document.createTextNode("Email is invalid. ");
			document.getElementById("emailCheck").appendChild(node);
			email=false;
		}
		if (document.getElementById("email").value != document.getElementById("confirmEmail").value){
			var node=document.createTextNode("Emails do not match.");
			document.getElementById("emailCheck").appendChild(node);
			email=false;
		}
		if(!checkSpecialCharactersPass(e)){
			var node=document.createTextNode(strInvalid);
			document.getElementById("emailCheck").appendChild(node);
			email=false;
		}
	}
	else{
		document.getElementById("emailCheck").innerHTML="";
		email=true;
	}

}

function checkGender(){
	return document.getElementById("male").checked||document.getElementById("female").checked;
		
}

function pageCheck(){

	if (pass&&email&&checkGender()&&last&&first&&username){
		return true;
	}
	return false;
}

function test(){
	
	document.getElementById("test").innerHTML=
	"Password: "+pass+document.getElementById("passCheck").innerHTML+
	"<br />Email: "+ email+ document.getElementById("emailCheck").innerHTML+
	"<br />Sex: "+ checkGender()+
	"<br />First: "+ firstName+
	"<br />Last: "+ lastName+
	"<br />Username: " + username + document.getElementById("userCheck").innerHTML;
}

function clearElement(elem){
	document.getElementById("test").innerHTML="test";
	var element=document.getElementById(elem);
	if (element.hasChildNodes()){
		while (element.childNodes.length>=1){
			element.removeChild(element.firstChild);
		}
	}
}

function checkSpecialCharactersPass(str){
	
	var iChars ="!#$%^&*()+[]\\\';,/{}|\":<>? "; //allowing @ and .
	for (var i = 0; i < str.length; i++) {
		if (iChars.indexOf(str.charAt(i)) != -1) {
			return false;
		}
	}
	return true;
}

// ajax server validation check username
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
	    if (xmlhttp.responseText.indexOf("valid")!=-1){
	    	document.getElementById("userCheck").style.color="#66CD00";
	    	}
	    else{
		    document.getElementById("userCheck").style.color="#8B3A3A";
	    	}
	    }
	  }
	xmlhttp.open("GET","checkUser.php?q="+user,true);
	xmlhttp.send();
	if(document.getElementById("userCheck").innerHTML==""){
		username=true;
	}
}