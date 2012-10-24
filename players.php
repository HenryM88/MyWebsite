<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		<script>
		function allowDrop(ev){
			ev.preventDefault();
		}
		function drag(ev){
			ev.dataTransfer.setData("Text",ev.target.id);
		}
		function drop(ev){
			ev.preventDefault();
			var data=ev.dataTransfer.getData("Text");
			ev.target.appendChild(document.getElementById(data));
		}
		</script>
		
	</head>
	<body>
		<?php include 'menu.php'?>
			<div class="middle">
			Here is a list of some of my favorite players. Drag the names to the container on the left to view more information about them.
			</br>
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
			<br />
			<p id="drag1" draggable="true" ondragstart="drag(event)">Kobe Bryant</p><br />
			<p id="drag1" draggable="true" ondragstart="drag(event)">Lebron James</p><br />
			<p id="drag1" draggable="true" ondragstart="drag(event)">Steve Nash</p><br />
			<p id="drag1" draggable="true" ondragstart="drag(event)">Dirk Nowitsky</p><br />
			</div>
			<div class="right">
			</div>
	</body>
</html>