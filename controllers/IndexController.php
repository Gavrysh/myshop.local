<?php

/**
 * Контролер головної сторінки
 */

// Під'єднуємо моделі
require_once '../models/CategoriesModel.php';

function testAction()
{
    echo 'IndexController.php > testAction';
}

/**
 * Формування головної сторінки сайту
 * @param object $smarty - шаблонизатор
 */
function indexAction($smarty)
{
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Головна сторінка сайту');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}