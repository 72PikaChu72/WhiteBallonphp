<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshopdb";


$fullname = $_POST['fullname'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$total_price = $_POST['total_price'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  // получаем данные из сессии о добавленных товарах в корзину
  if(isset($_SESSION['cart'])){
      $cart = $_SESSION['cart'];
  }else{
      $cart = array();
  }
  
  

// Проверка соединения
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if ($conn->connect_error) {
    die('Ошибка подключения к базе данных: ' . $conn->connect_error);
}
$ids = implode(',', array_keys($cart));

// Определяем SQL-запрос для добавления заказа в базу данных
$sql = "INSERT INTO orders (FIO, Address, PhoneNumber, Products, TotalPrice) VALUES ('".$fullname."', '".$address."', '".$phone_number."','".$ids."','".$total_price."')";
// Выполняем SQL-запрос
if ($conn->query($sql) === TRUE) {
   // echo $sql.; 
    echo 'success';
} else {
    echo 'error';
}

// Закрываем соединение с базой данных
$conn->close();
?>