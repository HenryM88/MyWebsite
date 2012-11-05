<?php
include 'databaseconnect.php';
include 'header.php';
?>
			<?php 
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
				//a reply was sent
				//user must be logged in
				if (!isset($_SESSION['user'])){
					echo "You must be logged in to create a reply.";
				}
				else{
					if(isset($_POST['uniqid']) and $_POST['uniqid'] == $_SESSION['uniqid']){
						// can't submit again
					}
					else{
						$sql= "INSERT INTO posts(
									post_content,
									post_date,
									post_thread,
									post_author)
								VALUES ('".
									mysql_real_escape_string($_POST['reply-content']) . "',
									NOW(), ".
									mysql_real_escape_string($_GET['id']) . ",'" .
									$_SESSION['user'] . "');";
						$result=mysql_query($sql) or die(mysql_error());
						if (!$result){
							echo "There was a problem submitting a reply post. Admin will fix it.";
						}
						else{
							echo "<h4>Your reply has been submitted.</h4><br />";
							$_SESSION['uniqid'] = $_POST['uniqid'];
						}
					}
				}
			}

			$sql="SELECT
					thread_id,
					thread_subject
				FROM
					threads
				WHERE
					threads.thread_id = " . mysql_real_escape_string($_GET['id']);
			$result=mysql_query($sql);
			if(!$result){
				echo "thread cannot be displayed, the admin will fix it asap";
			}
			else{
				if (mysql_num_rows($result)==0){
					echo "the thread does not exist.";
				}
				//display the thread
				while ($row=mysql_fetch_assoc($result)){
					echo "<h2>" . $row['thread_subject'] . "</h2><br />";
				}
			}
			$sql="SELECT
					post_thread,
					post_content,
					post_date,
					post_author
				FROM
					posts
				WHERE posts.post_thread = " .mysql_real_escape_string($_GET['id']);
			$result=mysql_query($sql);
			if(!$result){
				echo "posts are not displaying, admin will fix it asap";
			}
			else{
				if (mysql_num_rows($result)==0){
					echo "There are no posts in this thread yet.";
				}
				else{
					//Create a table to list the posts
					echo '<table border="1" class="forumTable">';
					while ($row=mysql_fetch_assoc($result)){
						echo "<tr class='postRow'>
						<td class='postInfo'>Posted by: " .$row['post_author'] . "<br />On " .
						$row['post_date'] . "</td>
						<td class='postedContent'>" . $row['post_content'] . "</td>
						</tr>";
						echo "<tr><td colspan='2'><a href='#reply'>Reply to post</a></td></tr>";

					}
					echo "</table>";
				}
			}
			?>
				<div id="reply">
				<h3>Post a reply</h3>
				<form method="post" action="" onsubmit="">
				Post:<br /><textarea class="postSubmitContent" name="reply-content"></textarea>
				<input type="hidden" name="uniqid" value ="<?php echo uniqid(); ?>" />
				<input type="submit" value="Submit Reply"> />
				</form>

<?php include 'footer.php'; ?>