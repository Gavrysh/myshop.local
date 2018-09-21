<?php
/**
 * Модель для роботи з таблицею категорії (categories)
 */

function getAllMainCatsWithChildren()
{
    $sql = 'SELECT * FROM categories WHERE parent_id = 0';

    $rs = mysqli_query($GLOBALS['db'], $sql);

    $smartyRs = [];
    while ($row = mysqli_fetch_assoc($rs)) {
        $smartyRs[] = $row;
    }

    return $smartyRs;
}