<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-11 02:35:58
  from 'F:\OpenServer\OpenServer\domains\Sveta\views\admin\adminHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd2b0deeab868_78227860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4afc0fa25ffa7e84f9a1ca36340632bc43ade26' => 
    array (
      0 => 'F:\\OpenServer\\OpenServer\\domains\\Sveta\\views\\admin\\adminHeader.tpl',
      1 => 1607643356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:adminLeftcolumn.tpl' => 1,
  ),
),false)) {
function content_5fd2b0deeab868_78227860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/main.css" type="text/css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/www/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/www/templates/admin/js/admin.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
</head>

<body>
    <div id="header">
        <h1>Управление сайтом</h1>
        <div class="LogoutButton">
            <a href="/?controller=admin&action=logoutadmin">
                <button type="button" class="btn btn-primary">Выйти из админки</button>
            </a>
        </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender('file:adminLeftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="centerColumn"><?php }
}
