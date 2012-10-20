var pass=false, email=false, firstName=false, lastName=false; 

function checkFirstName(first){
	if (first.length<1){
		document.getElementById("checkFirst").innerHTML="First Name field must not be empty.";
		firstName=false;
	}
	else{
		firstName=true;
	}
}


function checkLastName(last){
	if (last.length<1){
		document.getElementById("checkLast").innerHTML="Last Name field must not be empty.";
		lastName=false;
	}
	else{
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
	if (email!=null){
		if ((e.indexOf("@")==-1)||(e.length<=6)){
			var node=document.createTextNode("Email is invalid. ");
			document.getElementById("emailCheck").appendChild(node);
		}
		if (document.getElementById("email").value != document.getElementById("confirmEmail").value){
			var node=document.createTextNode("Emails do not match.");
			document.getElementById("emailCheck").appendChild(node);
		}
	}
	else{
		document.getElementById("emailCheck").innerHTML="null";
	}
	if (document.getElementById("emailCheck").innerHTML==""){
		email=true;
	}

}

function checkGender(){
	return document.getElementById("male").checked||document.getElementById("female").checked;
		
}

function pageCheck(){
	if (pass&&email&&checkGender()){
		return true;
	}
	return false;
}

function test(){
	document.getElementById("test").innerHTML="Password: "+pass+document.getElementById("passCheck").innerHTML+
	"<br />Email: "+ email+ document.getElementById("emailCheck").innerHTML+
	"<br />Sex: "+ checkGender(+
	"br />First: "+ firstName+
	"br />Last: "+ lastName);
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
