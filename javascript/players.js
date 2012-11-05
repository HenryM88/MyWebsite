function allowDrop(ev){
			ev.preventDefault();
		}
		function drag(ev,name){
			getPlayerInfo(name);
			ev.dataTransfer.setData("Text","test");
		}
		function drop(ev){
			ev.preventDefault();
			var data=ev.dataTransfer.getData("Text");
			ev.target.appendChild(document.getElementById(data));
		}

		
		
		</script>
		<script>
		function getPlayerInfo(name)
		{

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
			    document.getElementById("test").innerHTML=xmlhttp.responseText;
			    
			    }
			  }
			xmlhttp.open("GET","getPlayerInfo.php?name="+name,true);
			xmlhttp.send();
			/*if(document.getElementById("userCheck").innerHTML==""){
				username=true;
			}*/
		}