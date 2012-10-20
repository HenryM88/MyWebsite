<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css" />
		<script src="jquery.js"></script>
		<script>
		function fadeInFadeOut(ft){
			ft.fadeIn();
			/* ft.eq(0).fadeIn(1500,function(){
				ft.eq(0).fadeOut(1500,function(){
					(ft=ft.slice(1)).length && fadeInFadeOut(ft);
				});
			}); */
		} 
		</script>
		<script>
		$(document).ready(function(){
		$("button").click(function(){
			  fadeInFadeOut($("#s1"));
		});	
		});
		</script>

		
	</head>
	<body>
	<button>Test</button>
		<div class="top"
		
		<p class="fadeText" id="s1">The season starts on</p>
		<p class="fadeText" id="s2">Oct. 30</p>
		<p class="fadeText">Get your league pass now</p>
		<p class="fadeText">Or</p>
		<p class="fadeText">Watch all the games at</p>
		<p class="fadeText">Error: The link you have provided is no longer available.</p>
		
		</div>
		
		
		<?php include 'menu.php'?>
			<div class="middle">
			The purpose of this website is to help me develop and show my web design skills. I plan on incorporating many technologies
			into this site including javascrit, ajax, etc. The content will be based on my favorite sport, basketball, as well as other
			hobbies of mine. To learn more about me, click on the "About Me" link.
			</div>
			<div class="right">

			</div>
	</body>
</html>