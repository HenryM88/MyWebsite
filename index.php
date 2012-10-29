<?php include 'header.php';?>
<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/css/mystyle.css" />
	
		<script src="jquery.js"></script>
		<script>
		
		
		function fadeInFadeOut(ft){
			ft.eq(0).fadeIn(1000,function(){
				ft.eq(0).fadeOut(2000,function(){
					(ft=ft.slice(1)).length && fadeInFadeOut(ft);
				});
			});
		} 
		

		/*
		$(document).ready(function(){
			$("button").click(function(){
			  fadeInFadeOut($(".fadeText"));
			});
		});*/
		
		$(document).ready(function(){
			fadeInFadeOut($(".fadeText"));
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
		
		
		<p class="fadeText" id="s1">The season begins</p>
		<p class="fadeText" id="s2">Oct. 30</p>

		
		<div id="flashContent">
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="550" height="400" id="chalkRelease" align="middle">
				<param name="movie" value="chalkRelease.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="false" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="chalkRelease.swf" width="550" height="400">
					<param name="movie" value="chalkRelease.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="false" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
		
		<?php include 'menu.php'?>
			<div class="middle">
			<div class="test">
			</div>
			The purpose of this website is to help me develop and show my web design skills. I plan on incorporating 
			many technologies into this site including javascrit, ajax client and server validation, php, etc. The 
			content will be based on my	favorite sport, basketball, as well as other hobbies of mine. 
			<br />
			<br />
			<h3>Done/To Do List:</h3>
			<p>Here is a list of what I've done so far and what I plan to do. Some ideas were thought of from the
			start and others came up as I was building the site. </p>
			<ul>
			<li>&#8730 relearn HTML, DOM, javascript, ajax, learn php mysql</li>
			<li>&#8730 basic menu, background</li>
			<li>&#8730 downloaded wamp server but was unable to how website publicly despite port forwarding</li>
			<li>&#8730 set up new database and members table in phpmyadmin </li>
			<li>&#8730 created suscribe page and used client side validation through ajax</li>
			<li>&#8730 used server-side validation onchange to check duplicate usernames in database</li>
			<li>&#8730 confirmed that suscribed peron's data entered into database</li>
			<li>&#8730 changed menu to be a php file to be included so that it can be easily changed</li>
			<li>&#8730 learned basic jquery and played with fadeIn, fadeOut animations</li>
			<li>&#8730 created a session</li>
			<li>&#8730 created login page, server side validation</li>
			<li>&#8730 tested and fixed suscribing and logging in issues successfully</li>
			<li>&#8730 encrypted password with md5 so the password that the user entered is not stored anywhere
					and cannot be retrieved, even by me.</li>
			<li>&#8730 started free webhosting on 000webhost.com</li>		
			<li>&#8730 adjusting changes to code and paths after moving to webhost, changed background image</li>
			<li>&#8730 installed adobe flash professional cs6, went through some tutorials, and made a cheesy chalk 
			powder toss .swf to fit with the background, then uploaded it to site</li>
			<li>&#8730 created 'my favorite shows' section in hobbies. Made a slideshow of my favorite shows, made
			a navigator for it, and it pauses on hover.</li>
			<br />
			<li>log out function</li>
			<li>lost password function</li>
			<li>forums page, allow members to post</li>
			<li>players page, drag players, find their info (height, age, some basic statistics)
			teams</li>
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