

<!DOCTYPE HTML>
<html>
	<head>
		<title>My Website</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		<script>
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
		</script>

		
	</head>
	<body>
		<?php include 'menu.php' ?>
			<div class="middle">
			<p>The purpose of this page is to demonstrate the use of the drag and drop function as well as html scraping. I am going to retrieve some stats of some players through php/curl. 
			Unfortunately while starting to implement this, I found that it is not scalable (well, more like I have to look up the specific id for each player so a lot less automatic).  
			The problem is that	sites like espn and yahoo have some unique id for each player in the url, so I would have to hard code the url rather than dynamically generate the URL
			on the spot when a certain player's name is clicked or dropped. I will do what I can for a few players. <br />
			Current status: In progress <br />
			Update: Found out that the nba site does not have some id integrated into the url when searching for player info so I can use it instead of espn for the functionality I orignally
			intended, though I prefer using espn more. Anyway if I use nba.com instead, I would be able to create a text field here, allowing the user to type a name of a player, in which
			then this page would scrap the html from the nba site and display it here. I would come back to this after working on the forum. <br />
			</p>
			</br>
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
			<br />
			<p draggable="true" ondragstart="drag(event,this.innerHTML)">Kobe Bryant</p><br />
			<p draggable="true" ondragstart="drag(event,this.innerHTML)">Lebron James</p><br />
			<p draggable="true" ondragstart="drag(event,this.innerHTML)">Steve Nash</p><br />
			<p draggable="true" ondragstart="drag(event,this.innerHTML)">Dirk Nowitzky</p><br />
			<div id="test"></div>		
			
<?php include 'footer.php'; ?>