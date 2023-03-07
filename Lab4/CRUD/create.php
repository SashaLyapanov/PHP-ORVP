<?php
    require_once '../config/connect.php';
    $brand = $_POST['brand'];
    $color = $_POST['color'];
    $price = $_POST['price'];

    mysqli_query($connection, "INSERT INTO `cars` (`id`,`brand`, `color`, `price`) VALUES (NULL, '$brand', '$color', '$price')");


    //Возврат на главную страницу (Переодресация)
    header('Location: ../index.php');