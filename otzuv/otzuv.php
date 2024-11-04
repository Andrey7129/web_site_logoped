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
$namee = $_POST['namee'];
$emaill = $_POST['emaill'];
$messagee = $_POST['messagee'];

// SQL-запрос для вставки данных в таблицу
$sql = "INSERT INTO contacts (namee, emaill, messagee) VALUES ('$namee', '$emaill', '$messagee')";

if ($conn->query($sql) === TRUE) {
    echo "Заявка успешно отправлена!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();
session_destroy();