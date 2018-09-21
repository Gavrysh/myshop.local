<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../config/config.php';          // Ініціалізація налаштувань
require_once '../config/db.php';              // Ініціалізація бази даних
require_once  '../library/mainFunctions.php'; // Основні функції

// Визначаємо, з яким контролером будемо працювати
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// Визначаємо, з якою функцією будемо працювати
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($smarty, $controllerName, $actionName);