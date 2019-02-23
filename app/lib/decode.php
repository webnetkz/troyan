<?php

// Отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Функция дебага
function deB($elm) {
    echo '<pre>';
        var_dump($elm);
    exit();
}   