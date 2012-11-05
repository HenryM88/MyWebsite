<?php
include 'databaseconnect.php';
include 'header.php';
?>
			<h2>Create a thread</h2>
			<?php

			if (!isset($_SESSION['firstName'])){
				echo "You have to be logged in to create a topic";
			}
			else{
				if($_SERVER['REQUEST_METHOD']!='POST'){
					//form is not submitted yet, so display it
					$sql= "SELECT topic_id, topic_name, topic_description
							FROM topics";
					$result = mysql_query($sql) or die(mysql_error());
					if(mysql_num_rows($result)==0)
					{
						echo "There are no currently no topics to create any threads on";
					}
					else{
						echo '<form method="post" action="">
							Thread:<input type="Text" name="thread_subject" />
							Topic: ';
						echo '<select name="thread_topic">';
							while($row = mysql_fetch_assoc($result))
							{	
								echo '<option value="' . $row['topic_id'] . '">' . $row['topic_name'] . '</option>';
							}
						echo '</select><br />';
						echo 'Post: <br /><textarea class="postSubmitContent" name="post_content" /></textarea>
							<input type="submit" value="Create Thread" />
							</form>';
					}
				}
				else{
					//form is submitted, so process it
					$sql="BEGIN WORK;";
					$result=mysql_query($sql);
					if(!$result){
						echo "An error occurred while creating thread. Fix it Henry";
					}
					else{
						//insert the thread into threads table
						$sql = "INSERT INTO
								threads(thread_subject, 
									thread_date, 
									thread_topic, 
									thread_author)
								VALUES ('" . mysql_real_escape_string($_POST['thread_subject'])
									. "', NOW(), '"
									. mysql_real_escape_string($_POST['thread_topic']) . "','"
									. $_SESSION['user'] . "');";
						$result = mysql_query($sql);
						if(!result){
							//something wrong
							echo "An error occurred while inserting thread info to threads table.";
							$sql = "ROLLBACK;";
							$result = mysql_query($sql);
						}
						else{
							//first query worked, now inserting first post into posts table
							$threadid=mysql_insert_id();
							$sql="INSERT INTO
									posts(post_content,
										post_date,
										post_thread,
										post_author)
									VALUES ('".
										mysql_real_escape_string($_POST['post_content']) 
										. "', NOW(),"
										. $threadid . ",'" 
										. $_SESSION['user'] . "');";
							$result = mysql_query($sql);
							if(!$result){
								//something went wrong
								echo "An error has occurred while inserting post data to posts table";
								$sql = "ROLLBACK;";
								$result = mysql_query($sql);
							}
							else{
								$sql="COMMIT;";
								$result=mysql_query($sql);
								//query is finally submitted, thread and first post created
								echo "You have successfully created a thread";
							}							
						}
					}
				} 
			}
			?>
<?php include 'footer.php'; ?>