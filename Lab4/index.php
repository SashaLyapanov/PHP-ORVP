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
    <table>
        <tr>
            <th>Id</th>
            <th>Brand</th>
            <th>Color</th>
            <th>Price</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
            <th>&#128270;</th>
        </tr>
        <?php
            foreach($goods as $car) {
                ?>
                    <tr>
                        <td><?= $car[0] ?></td>
                        <td><?= $car[1] ?></td>
                        <td><?= $car[2] ?></td>
                        <td><?= $car[3] ?></td>
                        <td><a href="update.php?id=<?= $car[0]?>">Change</a></td>
                        <td><a href="CRUD/delete.php?id=<?= $car[0]?>">Delete</a></td>
                        <td><a href="show.php?id=<?= $car[0]?>">Info</a></td>
                    </tr>
                <?php
            }
            ?>

    </table>

    <div>
        <a href="create.php">Добавить новую машину в автосалон</a>
    </div>

</body>
</html>
