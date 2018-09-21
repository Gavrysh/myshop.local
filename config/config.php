<?php
/**
 * Файл налаштувань
 */

//> Константи для звернення до контролерів
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<

//> Використовуємий шаблон
$template = 'default';

// Шляхи до файлів шаблону (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');

// шляхи до файлів шаблонів у вебпросторі
define('TemplateWebPath', "/templates/{$template}/");
//<

// Ініціалізація шаблону Smarty
// вказуємо повний шлях до Smarty.class.php
require '../library/Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');

$smarty->assign('templateWebPath', TemplateWebPath);
//<