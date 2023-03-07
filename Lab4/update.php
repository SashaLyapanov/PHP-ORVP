<?php
require_once 'config/connect.php';
$goods_id = $_GET['id'];
$good = mysqli_query($connection, "SELECT * FROM `cars` WHERE id = '$goods_id'");
//Получение данных в виде ассоциативного массива (ключ - значение)
$good = mysqli_fetch_assoc($good);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Машины</title>
</head>
<body>
    <h2>Обновить машину</h2>
    <form action="CRUD/update.php" method="post">
        <input type="hidden" name="id" value="<?= $goods_id?>">
        <p>Название машины</p>
        <input type="text" name="brand" value="<?= $good['brand']?>">
        <p>Цвет</p>
        <input type="text" name="color" value="<?= $good['color']?>">
        <p>Цена</p>
        <input type="number" name="price" value="<?= $good['price']?>">
        <button type="submit">Обновить</button>
    </form>
</body>
</html>