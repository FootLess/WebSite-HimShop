<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 03:21:34
  from 'F:\OpenServer\OpenServer\domains\Sveta\views\admin\adminLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd40d0e634466_29018608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd275fc7cc894ec0a539165db4cf162e110314aaa' => 
    array (
      0 => 'F:\\OpenServer\\OpenServer\\domains\\Sveta\\views\\admin\\adminLogin.tpl',
      1 => 1607732488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd40d0e634466_29018608 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="content">
        <div class="container">
            <h1 class="">Авторизация для панели администратора</h1>
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="login" class="form-control" id="login" placeholder="Введите Логин">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" placeholder="Пароль">
            </div>
            <button type="submit" class="btn btn-primary" onclick="loginadminn();">Войти</button>
            <a href="/"><button type="submit" class="btn btn-primary"">Вернуться на сайт</button></a> 
        </div>
    </div>
</body>

</html><?php }
}
