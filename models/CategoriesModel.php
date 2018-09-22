<?php
/**
 * Модель для роботи з таблицею категорії (categories)
 */

function getChildrenForCat($catId)
{
    $sql = "SELECT * FROM categories WHERE parent_id = '{$catId}'";

    $rs = mysqli_query($GLOBALS['db'], $sql);

    return createSmartyRsArray($rs);
}

/**
 * Отримати головні категорії з прив'язками дочірніх
 *
 * @return array - масив категорій
 */
function getAllMainCatsWithChildren()
{
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';

    $rs = mysqli_query($GLOBALS['db'], $sql);

    $smartyRs = [];

    while ($row = mysqli_fetch_assoc($rs)) {
        $rsChildren = getChildrenForCat($row['id']);

        if ($rsChildren) {
            $row['children'] = $rsChildren;
        }

        $smartyRs[] = $row;
    }

    return $smartyRs;
}

/**
 * Отримати дані категорії по id
 *
 * @param integer $catId - id категорії
 * @param array масив - рядок категорії
 */
function getCatById($catId)
{
    $catId = intval($catId);

    $sql = "SELECT * FROM categories WHERE id = '{$catId}'";

    $rs = mysqli_query($GLOBALS['db'], $sql);

    return mysqli_fetch_assoc($rs);
}