<?php
/**
 * CategoryController.php
 * Контролер сторінки категорії (/category/1)
 */

// Під'єднуємо моделі
require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

/**
 * Формування сторінки категорій
 *
 * @param object $smarty - шаблонізатор
 */
function indexAction($smarty)
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if (!$catId) {
        exit();
    }

    $rsChildCats = null;
    $rsProducts = null;

    $rsCategory = getCatById($catId);

    // якщо головна категорія - показуємо дочерні категорії, інакше - показуємо товар
    if ($rsCategory['parent_id'] == 0) {
        $rsChildCats = getChildrenForCat($catId);
    } else {
        $rsProducts = getProductsByCat($catId);
    }

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Товари категорії '.$rsCategory['name']);
    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}