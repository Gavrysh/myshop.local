<?php

/**
 * Контролер головної сторінки
 */
function testAction()
{
    echo 'IndexController.php > testAction';
}

function indexAction($smarty)
{
    $smarty->assign('pageTitle', 'Головна сторінка сайту');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}