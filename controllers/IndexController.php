<?php

/**
 * Контролер головної сторінки
 */

// Під'єднуємо моделі
require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

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
    $rsProducts = getLastProducts(16); // виборка останніх 16 товарів

    $smarty->assign('pageTitle', 'Головна сторінка сайту');
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}