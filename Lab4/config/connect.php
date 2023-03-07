<?php
    $connection = mysqli_connect('localhost', 'root', '', 'autoSalon');
    if (!$connection) {
        die("Ошибка подключения к БД");
    }