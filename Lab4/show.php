<?php
require_once 'config/connect.php';
$id = $_GET['id'];
$goods = mysqli_query($connection, "SELECT * FROM `cars`WHERE `cars`.`id` = '$id'");
//Записываем полученные данные в ассоциативный массив
$good = mysqli_fetch_assoc($goods);
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
    <div>
        <h1>Car: <?= $good['brand']?></h1>
        <p>Color: <?= $good['color']?></p>
        <p>Price: <?= $good['price']?></p>
    </div>

    <div>
        <a href="index.php">Вернуться на главную</a>
    </div>
</body>
</html>