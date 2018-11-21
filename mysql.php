<?php 

// подключение к базе данных
$link = mysqli_connect('localhost', 'root', '', 'mini-site');

// если подключение не удалось, то останавливаем выполнение программы, функция

/*if ( mysqli_connect_error() ) {
	echo "Ошибка подключения к базе данных.";
} else {
	// обычно не выводится сообщение о подключении
	echo "Подключение прошло успешно";
}*/

if ( mysqli_connect_error() ) {
	// останавливаем выполнение скрипта
	die("Ошибка подключения к базе данных.");
}

// делаем запрос в базу данных
$query = "SELECT * FROM users";
mysqli_query($link, $query);

if ( $result = mysqli_query($link, $query) ) {
	echo "Query was successful!";
	$row = mysqli_fetch_array($result);
	print_r($row);

	echo "Пользователь № " . $row['id'] . ". Email пользователя: " . $row['email'] . ". Пароль: " . $row['password'];
}

 ?>