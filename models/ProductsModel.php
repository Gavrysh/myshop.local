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

    $rs = mysqli_query($sql);

    return createSmartyRsArray($rs);
}