<?php
require_once 'config/connect.php';
$goods = mysqli_query($connection, "SELECT * FROM `cars`");
$goods = mysqli_fetch_all($goods);
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
    <h2>Добавлить новую машину</h2>
        <form action="CRUD/create.php" method="post">
            <p>Название машины</p>
            <input type="text" name="brand">
            <p>Цвет</p>
            <input type="text" name="color">
            <p>Цена</p>
            <input type="number" name="price">
            <button type="submit">Добавить</button>
        </form>
</body>
</html>