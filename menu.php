<nav class="menu">
			<ul>
				<li><a href="/index.php">HOME</a></li>
				<li>
					<a href="/teams.php">TEAMS</a>
					<ul>
						<li><a href="/teams/lakers.php">Los Angeles Lakers</a></li>
						<li><a href="/teams/knicks.php">New York Knicks</a></li>
						<li><a href="/teams/nets.php">Brooklyn Nets</a></li>
					</ul></li>
				<li><a href="/players.php">PLAYERS</a></li>
				<li><a href="/suscribe.php">SUSCRIBE</a></li>
				<li><a href="/hobbies.php">OTHER HOBBIES</a></li>
				<li id="menuLast"><a href="/forum.php">FORUM</a></li>
			</ul>			
		</nav>
<div id="forumMenu"><?php
	if ($_SERVER['PHP_SELF']=='/forum.php'){
		if (isset($_SESSION['user']) and $_SESSION['user']=="Admin"){
			echo '<a class="forumButtons" href="/create_topic.php">CREATE NEW TOPIC</a>';
		}
	}
	if ($_SERVER['PHP_SELF']=='/topic.php'){
		if (isset($_SESSION['user'])){
			echo '<a class="forumButtons" href="/create_thread.php?id=' .mysql_real_escape_string($_GET['id']) . '">CREATE NEW THREAD</a>';
		}
		else{
			echo 'You must be logged in order to create a thread';
		}
		
	}
	/*
	if ($_SERVER['PHP_SELF']=='forum.php'){
		echo '<a class="forumButtons" href="/create_thread.php">Create new thread</a>';
	}
	else{
		echo "forum menu/create thread not working";
	} */
?>
</div>
<div id="loginLogoutMenu"><?php
  if (isset($_SESSION["firstName"])) {
        echo "Hello " . $_SESSION["firstName"] . " Not you? <a class='loginButton' href='logout.php'><b>Logout</b> </a>";
     }
  else{
  	echo "<a class='loginButton' href='login.php'>Login</a>";
  }

  

?>

</div>
		