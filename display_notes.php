<?php
// параметры подключения к базе данных 
$host = "localhost"; //хост базы данных
$username = "root"; //Имя пользователя БД
$password = ""; //Пароль пользователя БД
$database = "my_db"; //Имя базы данных

// создать подключение к базеданных

$mySQL = new mysqli($host, $username, $password, $database);

// Проверка на ошибки подключения
if ($mySQL->connect_error) {
    die("Ошибка подключения :" . $mySQL->connect_error);
} else {
    echo "Успешное подключение к БД : $database";
}
