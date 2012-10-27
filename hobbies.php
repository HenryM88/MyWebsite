<?php include 'header.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		<script src="jquery.js"></script>
		<script>
		var imageDir ='/images/';
		var delayInSeconds=3;
		var images = ['how-i-met-your-mother.jpg','the_big_bang_theory.jpg','modernfamily.jpg','dexter.jpg',
			'game-of-thrones.jpg','the-walking-dead.jpg'];
		var str = new Array();
		str[0]= "One of my favorite shows. Started watching it when season 3 was airing, marathoned it, and pretty much watching it the night it gets released or the day after since. Neil Patrick Harris is awesome and the things the writers come up with sometimes are just downright ingenious.";
		str[1]= "Another show I watch; it has its moments. Laughs here and there but no where as good as himym.";
		str[2]= "Great show, very funny, and I think they upped it a notch this season."; 
		str[3]= "The protagonist is a serial killer, how cool is that. Makes you emphasize with him	too since he only kills rapists and murderers, though thats not the reason he's doing it. Don't get caught Dexter!";
		str[4]= "Wow, epic show. It's a must watch, next to himym, though they are completely different genres. It's pretty much a medieval fantasy genre, with a pretty good ongoing story. The book series isn't completed yet. Tyrion and Arya are my favorite characters.";
		str[5]= "Zombies arahahggggg arhahghh. They call them walkers in this show. I can't say that I liked the first 2 seasons so much, kind of watched it when I was bored. Some of my friends probably liked it more, probably just because it had to do with zombies. Well, the 3rd season started and I got to say that I was pretty impressed. I don't know if it's the way they directed it or the new plot, but I'm looking forward to the next episode.";
		var rotateStart=null;
		var num=1;
		function rotateImage(){
			var len=images.length;
			document.getElementById('selectedImage').src=imageDir+images[num];
			document.getElementById("selectedText").innerHTML=str[num];
			$(".imageButton").css({"background-color":"gray"});
			$(".imageButton:eq("+ num +")").css({"background-color":"green"});
			num++;
			if (num==len){
				num=0;
			}
		}
		$("#selectedImage").hover(function(){rotateStart=clearInterval(rotateStart);},
			function(){rotateStart=setInterval(function(){rotateImage()}, delayInSeconds*1000);
		});
		$(document).ready(function(){
			$(".imageButton:eq(0)").css({"background-color":"green"});
			rotateStart = setInterval(function(){rotateImage()}, delayInSeconds*1000);
		}); 

		/*
		var num=0;
		function rotateImages(){
			var len=$(".rotate").length;
			$(".rotate").hide();
			$(".imageButton").css({"background-color":"gray"});
			$(".rotate:eq("+ num +")").fadeIn(1000);
			$(".imageButton:eq("+ num +")").css({"background-color":"green"});
			$(".rotateText").hide();
			$(".rotateText:eq("+ num +")").fadeIn(1000);
			num++;
			$(".rotate:eq("+ num +")").hover(function(){rotateStart=clearInterval(rotateStart);},
					function(){
				
				rotateStart=setInterval("rotateImages()",4000);}
			);
			if (num==len){
				num=0;
			}
		}
		var rotateStart; 
		$(document).ready(function(){
			rotateStart=setInterval("rotateImages()",4000);
			
		});
		*/
		
		
		</script>
	</head>
	<body>
		<?php include 'menu.php'?>
			<div class="middle">
			<h1>My favorite Tv shows</h1>
			<!--
			<img class="rotate" src="/images/how-i-met-your-mother.jpg" />
			<img class="rotate" src="/images/the_big_bang_theory.jpg" />
			<img class="rotate" src="/images/modernfamily.jpg" />
			<img class="rotate" src="/images/dexter.jpg" />
			<img class="rotate" src="/images/game-of-thrones.jpg" />
			<img class="rotate" src="/images/the-walking-dead.jpg" /> 
			<p class="rotateText">One of my favorite shows. Started watching it when season 3 was airing, marathoned it,
			and pretty much watching it the night it gets released or the day after since. Neil Patrick Harris is
			awesome and the things the writers come up with sometimes are just downright hilarious.</p>
			<p class="rotateText">Another show I watch; it has its moments. Laughs here and there but no where as good
			as himym.</p>
			<p class="rotateText">Great show, very funny, and I think they upped it a notch this season.</p>
			<p class="rotateText">The protagonist is a serial killer, how cool is that. Makes you emphasize with him
			too since he only kills rapists and murderers, though thats not the reason he's doing it. Don't get caught
			Dexter!</p>
			<p class="rotateText">Wow, epic show. It's a must watch, next to himym, though they are completely different
			genres. It's pretty much a medieval fantasy genre, with a pretty good ongoing story. The book series isn't
			completed yet. Tyrion and Arya are my favorite characters.</p>
			<p class="rotateText">Zombies arahahggggg arhahghh. They call them walkers in this show. I can't say that I
			liked the first 2 seasons so much, kind of watched it when I was bored. Some of my friends probably liked
			it more, probably just because it had to do with zombies. Well, the 3rd season started and I got to say
			that I was pretty impressed. I don't know if it's the way they directed it or the new plot, but I'm looking
			forward to the next episode.</p> -->
			<img id="selectedImage" src="/images/how-i-met-your-mother.jpg" height="300px" />
			<p id="selectedText">One of my favorite shows. Started watching it when season 3 was airing, marathoned it,
			and pretty much watching it the night it gets released or the day after since. Neil Patrick Harris is
			awesome and the things the writers come up with sometimes are just downright hilarious.</p>
		
			<ul id="imageNav">
			<li><button class="imageButton"></button></li>
			<li><button class="imageButton"></button></li>
			<li><button class="imageButton"></button></li>
			<li><button class="imageButton"></button></li>
			<li><button class="imageButton"></button></li>
			<li><button class="imageButton"></button></li>
			</ul>
			</div>
			<div class="right">
			</div>
	</body>
</html>