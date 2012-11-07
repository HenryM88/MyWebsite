<?php> include 'header.php'; ?>
				<?php
				include 'databaseconnect.php';
				$sql = "SELECT
							topic_id,
							topic_name,
							topic_description,
							topic_date
						FROM
							topics";
				$result = mysql_query($sql) or die(mysql_error());
				if(!result)
				{
					echo 'The topics could not be displayed, something is broken.';
				}
				else{
					if(mysql_num_rows($result)==0)
					{
						echo 'No topics defined yet.';
					}
					else{
						echo '<table border="1" class="forumTable">
							<tr class="forumTableHeader">
								<th class="leftForumColumn">Topic</th>
								<th>Date Created</th>
							</tr>';
						while ($row=mysql_fetch_assoc($result))
						{
							echo '<tr class="tableRows">
								 <td><h3><a href="topic.php?id='.$row['topic_id'].'">' .  $row['topic_name'] . '</a></h3>' . $row['topic_description'] . '</td>';
							echo '<td>' . $row['topic_date'] . '</td>
								</tr>';
						}
						echo '</table>';
					}
				}
				?>
<?php include 'footer.php'; ?>