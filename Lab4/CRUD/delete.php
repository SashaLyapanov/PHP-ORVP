<?php

    require_once "../config/connect.php";
    $id = $_GET['id'];

    mysqli_query($connection, "DELETE FROM `cars` WHERE `cars`.`id` = '$id'");

    //Возврат на главную страницу (Переодресация)
    header('Location: ../index.php');