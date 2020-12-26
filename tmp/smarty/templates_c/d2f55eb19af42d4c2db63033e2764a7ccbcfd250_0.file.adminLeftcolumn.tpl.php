<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-11 02:35:45
  from 'F:\OpenServer\OpenServer\domains\Sveta\views\admin\adminLeftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd2b0d1e47ab4_36157197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2f55eb19af42d4c2db63033e2764a7ccbcfd250' => 
    array (
      0 => 'F:\\OpenServer\\OpenServer\\domains\\Sveta\\views\\admin\\adminLeftcolumn.tpl',
      1 => 1607643342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd2b0d1e47ab4_36157197 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container justify-content-md-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="?controller=admin">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=admin&action=category">Категории</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=admin&action=products">Товар</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=admin&action=orders">Заказы</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
