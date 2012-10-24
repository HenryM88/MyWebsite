<?php include 'header.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
		<script src="jquery.js"></script>
		<script>
		
		function fadeInFadeOut(ft){
			ft.eq(0).fadeIn(1000,function(){
				ft.eq(0).fadeOut(1000,function(){
					(ft=ft.slice(1)).length && fadeInFadeOut(ft);
				});
			});
		} 
		

		
		$(document).ready(function(){
			$("button").click(function(){
			  fadeInFadeOut($(".fadeText"));
			});
		});
		
		
/*
		$(document).ready(function(){
			$("#test").click(function(){
				$("#s1").fadeIn(1500).fadeOut(1500);
				$("#s2").delay(3100).fadeIn(1500).fadeOut(1500);
			});
		});
		*/
				
		</script>


		
	</head>
	<body>
	<button id="test">Test</button>
		
		
		<p class="fadeText" id="s1">The season starts on</p>
		<p class="fadeText" id="s2">Oct. 30</p>
		<p class="fadeText" id="s3">Get your league pass now</p>
		<p class="fadeText" id="s4">Or</p>
		<p class="fadeText" id="s5">Watch all the games at</p>
		<p class="fadeText" id="s6">Error: The link you have provided is no longer available.</p>
		
		
		
		<?php include 'menu.php'?>
			<div class="middle">
			The purpose of this website is to help me develop and show my web design skills. I plan on incorporating many technologies
			into this site including javascrit, ajax, etc. The content will be based on my favorite sport, basketball, as well as other
			hobbies of mine. 
			<br />
			<br />
			<h3>Done/To Do List:</h3>
			<p>Here is a list of what I've done so far and what I plan to do. Some ideas were thought of from the
			start and others came up as I was building the site. </p>
			<ul><span class="green">
			<li>relearn HTML, DOM, javascript, ajax, learn php mysql</li>
			<li>basic menu, background</li>
			<li>downloaded wamp server but was unable to how website publicly despite port forwarding</li>
			<li>set up new database and members table in phpmyadmin </li>
			<li>created suscribe page and used client side validation through ajax</li>
				server-side validation onchange to check duplicate usernames in database
				suscribed peron's data entered into database
			<li>changed menu to be a php file to be included so that it can be easily changed</li>
			<li>learned basic jquery and played with fadeIn, fadeOut animations</li>
			<li>created a session</li>
			<li>created login page, server side validation</li>
			<li>tested and fixed suscribing and logging in issues successfully</li>
			<li>encrypted password with md5 so the password that the user entered is not stored anywhere
					and cannot be retrieved, even by me.</li>
			<li>started free webhosting on 000webhost.com</li>
			
			<li>adjusting changes to code and paths after moving to webhost</li></span>
			<li>log out function</li>
			<li>lost password function</li>
			<li>forums page, allow members to post</li>
			<li>players page, drag players, find their info (height, age, some basic statistics)
			teams</li>
			<li>project page (jason's task, recreate league of legends promo page)</li>
			<li>about me page</li>
			<li>buttons to change site theme (css)</li>
			<li>audio, flash, animation</li>
			<li>install mac, linux on vmware and play around with it</li>
			<li>create timer since I started working on website using flash/actionscript</li>
			</ul>
			<br /><br /><br /><br /><br />
		
			</div>
			<div class="right">

			</div>
	</body>
</html>