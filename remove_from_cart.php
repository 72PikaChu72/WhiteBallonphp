<?php
session_start(); // Инициализация сессии
if(isset($_POST['productId'])) { // Проверяем, был ли передан ID товара
    $productId = $_POST['productId'];
    if(isset($_SESSION['cart'][$productId])) { // Если товар уже есть в корзине
        if($_SESSION['cart'][$productId] > 1) { // Если количество товара больше 1
            $_SESSION['cart'][$productId]--; // Уменьшаем количество товара на 1
        } else { // Если количество товара равно 1
            unset($_SESSION['cart'][$productId]); // Удаляем товар из корзины
        }
        echo 'success'; // Возвращаем ответ об успешном удалении товара
    } else {
        echo 'error'; // Возвращаем ответ об ошибке, если товара нет в корзине
    }
} else {
    echo 'error'; // Возвращаем ответ об ошибке, если ID товара не был передан
}
?>