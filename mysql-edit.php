<?php 

// подключение к базе данных
$link = mysqli_connect('localhost', 'root', '', 'mini-site');

if ( mysqli_connect_error() ) {
	// останавливаем выполнение скрипта
	die("Ошибка подключения к базе данных.");
}

// Формируем запрос
$query = "UPDATE `users` SET `email` = 'joker@hotmail.com' WHERE `id` = 2 LIMIT 1";

// Обращаться можно не только по айдишке, но и по значениям других полей
$query = "UPDATE `users` SET `password` = '555' WHERE `email` = 'joker@hotmail.com' LIMIT 1";


// Функция для выполнения запроса
mysqli_query($link, $query);

 ?>