<?php

include 'databaseconnect.php';
include 'header.php';
?>
			<h2>Create a topic</h2>
			<?php
			if($_SERVER['REQUEST_METHOD'] != 'POST')
			{
				//form has not been posted yet, display it
				echo 
				'<form method="post" action="">
				Topic name: <input type="text" name="topic_name" />
				Topic description <textarea name="topic_description" /></textarea>
				<input type="submit" value="Add topic" />
				</form>';
			}
			else{
				//form has been posted so save
				$sql = "INSERT INTO topics(
						topic_name, 
						topic_description,
						topic_date)
				VALUES ('".mysql_real_escape_string($_POST[topic_name]) ."','" 
						.mysql_real_escape_string($_POST[topic_description]) . "',
						NOW());";
				$result = mysql_query($sql) or die(mysql_error());

				
					echo 'something.';
			}
		?>
<?php include 'footer.php'; ?>
