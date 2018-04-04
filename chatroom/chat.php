<?php
	include("db.php"); ?>

		
				<?php
						
					$query = "SELECT * FROM chat ORDER BY id DESC";
					$run = $connection->query($query);
					
					while ($row = $run->fetch_array()){
						
					
					$name = $row['name'];
					$message = $row['message'];
					$time = $row['date'];
					
					$time = formatDate($time);
					?>	

			
			 
			<div id="chat_data">
		
			
				<span style="color:black;"><?php echo $name ?>:</span>
				<p>
				<span style="color:blue; font-size:smaller;"><?php echo $message ?></span>
				</p><p>
				<span style="float:left; font-size: x-small"><?php echo $time ?></span>
				</p><br>
			</div>
				<?php }; ?>
					
			