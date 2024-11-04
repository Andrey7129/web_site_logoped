<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "port";

// Подключение к базе данных
$conn = new mysqli($servername, $username, $password, $dbname);


// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST['name'];
$names = $_POST['names'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO contacts (name, names, email, message) VALUES ('$name', '$names', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Заявка успешно отправлена!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();