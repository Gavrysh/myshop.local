<?php
/**
 * ProductController.php
 *
 * Контролер сторінки товару (/product/1)
 */

// підключаємо моделі
require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

function indexAction($smarty)
{
    $itemId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($itemId == null) {
        exit();
    }

    // отримати дані продукту
    $rsProduct = getProductById($itemId);

    // отримати усі категорії
    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', '');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProduct', $rsProduct);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'product');
    loadTemplate($smarty, 'footer');
}