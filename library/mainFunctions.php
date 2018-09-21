<?php
/**
 * Основні функції
 */

/**
 * Функція відладки. Зупиняє роботу програми та виводить значення змінної $value
 * @param variant $value - змінна для виводу на сторінку
 * @param int $die - 1 - зупинити роботу сценарію
 */
function wtf($value, $die = 1)
{
    echo '<b>Debug:</b><br><pre>';
    print_r($value);
    echo '</pre>';

    if($die) {
        $die;
    }
}
/**
 * Формування запитуємої сторінки
 * @param string $controllerName - назва контролеру
 * @param string $actionName - назва функції-обробника сторінки
 */
function loadPage($smarty, $controllerName, $actionName = 'index')
{
    // Під'єднуємо контролер
    require_once PathPrefix.$controllerName.PathPostfix;

    // Формуємо назву функції
    $function = $actionName.'Action';

    $function($smarty);
}

/**
 * Завантаження шаблону
 * @param object $smarty - об'єкт шаблонізатору
 * @param string $templateName - назва файла шаблону
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName.TemplatePostfix);
}