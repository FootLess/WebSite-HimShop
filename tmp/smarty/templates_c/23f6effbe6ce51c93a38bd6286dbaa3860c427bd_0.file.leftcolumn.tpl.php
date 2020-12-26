<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-26 17:20:55
  from 'F:\GitHub\WebSite-HimShop\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe746c7abbd12_20896694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23f6effbe6ce51c93a38bd6286dbaa3860c427bd' => 
    array (
      0 => 'F:\\GitHub\\WebSite-HimShop\\views\\default\\leftcolumn.tpl',
      1 => 1607742176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe746c7abbd12_20896694 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="topMenu">
    <div class="container d-flex justify-content-center">
        <nav class="dws-menu">
            <ul>
                <li><a href="/"><i class="fas fa-home"></i>Главная </a></li>
                <li><a href="#"><i class="fas fa-align-justify"></i>Категории товаров</a>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <li><a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>

                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
                                <li><a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a></li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                            <?php }?>

                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </li>
                <li><a href="?controller=index&action=about"><i class="fas fa-address-card"></i>О нас </a></li>
            </ul>
        </nav>
                <?php if ((isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
        <div id="userBox" class="d-flex flex-column">
            <div class="UserBox_LineB">
                <span>Пользователь: </span>
                <a href="?controller=user" id="userLink"><?php echo $_smarty_tpl->tpl_vars['arUser']->value['displayName'];?>
</a>
            </div>
            <a href="?controller=user&action=logout" onclick="logout();" class="Logout">Выход</a>
        </div>
        <?php }?>
                <div class="Cart">
            <a href="?controller=cart&action=index" title="Перейти в корзину"
                class="CartName d-flex justify-content-end" style="font-family: 'Fredoka One', cursive;">
                <i class="cartIcon fas fa-shopping-cart"></i>В корзине
                <span id="cartCntItems" class="pl-2" style="font-family: 'Roboto', sans-serif;">
                    [<?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>пусто<?php }?>]
                </span>
            </a>
        </div>
                <div class="Registration">
            <?php if (!(isset($_smarty_tpl->tpl_vars['arUser']->value))) {?>
            <?php if (!(isset($_smarty_tpl->tpl_vars['hideLoginBox']->value))) {?>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Регистрация
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Введите ваши данные:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body d-flex flex-column" id="registerBox">
                            email:
                            <input type="text" id="email" name="email" value="" />
                            пароль:
                            <input type="password" id="pwd1" name="pwd1" value="" />
                            повторить пароль:
                            <input type="password" id="pwd2" name="pwd2" value="" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                            <button type="button" class="btn btn-primary"
                                onclick="registerNewUser();">Зарегистрироваться</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
            <?php }?>
        </div>
    </div>
</div><?php }
}
