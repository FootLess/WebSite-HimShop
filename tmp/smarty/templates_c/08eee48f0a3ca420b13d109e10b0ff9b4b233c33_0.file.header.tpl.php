<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-26 17:20:55
  from 'F:\GitHub\WebSite-HimShop\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe746c79892a2_84317395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08eee48f0a3ca420b13d109e10b0ff9b4b233c33' => 
    array (
      0 => 'F:\\GitHub\\WebSite-HimShop\\views\\default\\header.tpl',
      1 => 1607740630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_5fe746c79892a2_84317395 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/main.css" type="text/css">
    <?php echo '<script'; ?>
 src="/www/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/www/js/main.js"><?php echo '</script'; ?>
>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Kaushan+Script&family=Montserrat+Alternates:ital,wght@0,600;1,900&family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div id="header" class="p-2 text-dark d-flex justify-content-md-center">
        <div class="row">
                        
                        <div class="col-4">
                <a href="/" class="HeaderBrand ">
                    <h1>HimMain</h1>
                </a>
            </div>
               
                        <div class="Login">
                <?php if (!(isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['hideLoginBox']->value))) {?>
                        <div id="loginBox" class="row">
                            <div class="col p-0">
                                <div class="menuCaption">Авторизация</div>
                                <input type="text" id="loginEmail" name="loginEmail" value="" placeholder="email"><br>
                                <input type="password" id="loginPwd" name="loginPwd" value="" placeholder="пароль"><br>
                            </div>
                            <div class="col LoginButton">
                                <input type="button" onclick="login()" value="Войти" class="btn btn-dark">
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            </div>
                    </div>
    </div>


    <?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_assignInScope('num1', $_GET['action']);?>
    <?php $_smarty_tpl->_assignInScope('num2', $_GET['controller']);?>
    <?php if ($_smarty_tpl->tpl_vars['num1']->value == $_smarty_tpl->tpl_vars['num2']->value) {?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/www/images/products/Slider-1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/www/images/products/Slider-2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/www/images/products/Slider-3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <?php }?>


    <div id="centerColumn" class="main_content">
        <div class="container"><?php }
}
