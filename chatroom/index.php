<!DOCTYPE html>

<html>
	<head>
		<title>
		Chat System
		</title>
		
	<?php include("db.php"); ?>
	<link rel="stylesheet" href="style.css" media="all">
	
	<script>
		function ajax(){
			
			var req = new XMLHttpRequest();
			
			req.onreadystatechange = function(){
				
				if(req.readyState == 4 && req.status == 200){
					
					document.getElementById('chat').innerHTML = req.responseText;
					
				}
			}
			
			req.open('GET','chat.php',true);
			req.send();
			
		}
		
		setInterval(function(){ajax()},1000);		
			
		
	</script>
	
	</head>
<body onload ="ajax();">	
	<div id="container">
		 
		<div id="chat_box">
		<div id="chat"></div>
		</div>
		
		
		<div id="inputbox">
<form method="post" action="index.php">
<input type="text" name = "name" placeholder="Enter Name"/>
<textarea name="message" placeholder="enter message"></textarea>
<input type="submit" name="enter" value="Send Message"/>
			
	</form>
		</div>
		
		<?php
		if (isset($_POST['enter'])){
			
			$name = $_POST['name'];
			$message = $_POST['message'];
			
			
		$query = "INSERT INTO `chat`(`name`, `message`) VALUES ('{$name}','{$message}')";
		$run = $connection->query($query);
		}
		?>
		
	</div>
	

	
	
	
</body>		
</html>
