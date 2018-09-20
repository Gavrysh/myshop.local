<?php

function loadPage($controllerName, $actionName = 'index')
{
    // Під'єднуємо контролер
    require_once PathPrefix.$controllerName.PathPostfix;

    // Формуємо назву функції
    $function = $actionName.'Action';

    $function();
}
