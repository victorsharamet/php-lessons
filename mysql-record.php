<?php 

// подключение к базе данных
$link = mysqli_connect('localhost', 'root', '', 'mini-site');

if ( mysqli_connect_error() ) {
	// останавливаем выполнение скрипта
	die("Ошибка подключения к базе данных.");
}

// Формируем запрос
$query = "INSERT INTO `users` (`email`, `password`) VALUES (`joker@mail.ru`, `777`)";

// Функция для выполнения запроса
mysqli_query($link, $query);

 ?>