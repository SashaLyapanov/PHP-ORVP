<?php
require_once '../config/connect.php';
$id = $_POST['id'];
$brand = $_POST['brand'];
$color = $_POST['color'];
$price = $_POST['price'];

mysqli_query($connection, "UPDATE `cars` SET `brand` = '$brand', `color` = '$color', `price` = '$price'  WHERE `cars`.`id` = '$id'");


//Возврат на главную страницу (Переодресация)
header('Location: ../index.php');