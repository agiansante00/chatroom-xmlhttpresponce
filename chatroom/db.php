<?php
	
$host = 'localhost';
$user = 'root';
$password = 'password';

$db_name = "chat";


$connection = new mysqli($host,$user,$password, $db_name);


if (!isset($connection)){
	echo "ERROR";
	}
	
	

function formatDate($date){
	return date('F j, Y, g:i a', strtotime($date));
}

?>
