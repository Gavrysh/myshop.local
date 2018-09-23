<?php /* Smarty version Smarty-3.1.6, created on 2018-09-22 19:58:03
         compiled from "../views/default/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1422133475ba6749b06b123-03795357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbdba5b3e744fb99042215648705161ce6110d6' => 
    array (
      0 => '../views/default/header.tpl',
      1 => 1537623873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1422133475ba6749b06b123-03795357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageTitle' => 0,
    'templateWebPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5ba6749b0a99c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ba6749b0a99c')) {function content_5ba6749b0a99c($_smarty_tpl) {?><!DOCTYPE html>
<html lang="uk-UA">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
</head>
<body>
<div id="header">
    <h1>myShop - Інтернет магазин (чогось то там)</h1>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- Центральна частина (контент) -->
<div id="centerColumn"><?php }} ?>