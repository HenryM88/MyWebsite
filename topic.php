<?php
include 'databaseconnect.php';
include 'header.php';
?>

			<?php
			$sql = "SELECT 
						topic_id, 
						topic_name, 
						topic_description
					FROM
						topics
					WHERE
						topic_id= " . mysql_real_escape_string($_GET['id']);
			$result = mysql_query($sql);
			if (!$result){
				echo "topic could not be displayed, fix it";
			}
			else{
				if (mysql_num_rows($result)==0){
					echo 'This topic does not exist. ';
				}
				else{
					while($row=mysql_fetch_assoc($result)){
						echo '<h2>Threads in \'' . $row['topic_name'] . '\' topic</h2>';
					}
					//query for threads
					$sql= "SELECT *
					FROM (SELECT
							thread_id,
							thread_subject,
							thread_date,
							thread_topic,
							thread_author,
							post_date as thread_last_updated
							FROM
								threads, posts
							WHERE
								thread_topic = " . mysql_real_escape_string($_GET['id']) . 
							" AND post_thread=thread_id
							ORDER BY post_date DESC) AS x
							GROUP BY thread_id;";
					$result = mysql_query($sql);
					if(!$result){
						"There are no threads in this topic yet.";
					}	
					else{
						//make a table to list the threads
						echo '<table border="1" class="forumTable">
						<tr class="forumTableHeader">
						<th class="leftForumColumn">Thread</th>
						<th>Thread Info</th>
						</tr>';
						while($row=mysql_fetch_assoc($result)){
							echo '<tr class="tableRows">';
							echo '<td><h3><a href="thread.php?id=' .$row['thread_id'] . '">' .  $row['thread_subject'] . '</a></h3></td>';
							echo '<td>Thread Creator: '. $row['thread_author'] . '<br />
							Thread Started: ' . $row['thread_date'] . '<br />
							Thread Last Updated: ' . $row['thread_last_updated'] . '</td>';
							echo '</tr>';
						} 
						echo '</table>';
					}
				}
			}
			?>
<?php include 'footer.php'; ?>