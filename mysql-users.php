<?php 

$link = mysqli_connect('localhost', 'root', '', 'mini-site');

if ( mysqli_connect_error() ) {
	die ("Ошибка подключения к базе данных.");
}

$query = "SELECT * FROM `users`";

if ( $result = mysqli_query($link, $query) ) {
	
	while ( $row = mysqli_fetch_array($result) ) {
		echo "<pre>";
		print_r($row);
		echo "<pre>";
	}
}


 ?>