<?php
/**
 * Модель для таблиці продуктів (products)
 */

/**
 * Отримуємо останні додані товари
 *
 * @param integer $limit - ліміт товарів
 * @return array - масив товарів
 */
function getLastProducts($limit = null)
{
    $sql = "SELECT * FROM `products` ORDER BY id DESC";

    if ($limit) {
        $sql .= " LIMIT {$limit}";
    }

    $rs = mysqli_query($GLOBALS['db'], $sql);

    return createSmartyRsArray($rs);
}

/**
 * Отримати продукти для категорії $itemId
 *
 * @param integer $itemId - id категорії
 * @return array|bool - масив продуктів
 */
function getProductsByCat($itemId)
{
    $itemId = intval($itemId);

    $sql = "SELECT * FROM products WHERE category_id = '{$itemId}'";

    $rs = mysqli_query($GLOBALS['db'], $sql);

    return createSmartyRsArray($rs);
}