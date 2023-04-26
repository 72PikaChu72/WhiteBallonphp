<?php
session_start(); // Инициализация сессии
if(isset($_POST['productId'])) { // Проверяем, был ли передан ID товара
    $productId = $_POST['productId'];
    if(isset($_SESSION['cart'][$productId])) { // Если товар уже есть в корзине
        $_SESSION['cart'][$productId]++; // Увеличиваем количество товара на 1
    } else { // Если товара еще нет в корзине
        $_SESSION['cart'][$productId] = 1; // Добавляем товар в корзину
    }
    echo 'success'; // Возвращаем ответ об успешном добавлении товара
} else {
    echo 'error'; // Возвращаем ответ об ошибке
}
?>