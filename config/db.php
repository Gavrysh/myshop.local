<?php
/**
 * Ініціалізація під'єднання до бази даних
 */

$dblocation = '127.0.0.1';
$dbname     = 'myshop';
$dbuser     = 'gases';
$dbpasswd   = 'bdoZY3';

// З'єднуємося з БД
$db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);

if (!$db) {
    echo 'Помилка з`єднання з MySQL';
    exit();
}

// Встановлюємо кодування за замовченням для поточного з'єднання
mysqli_set_charset($db, 'utf8');