<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 15:46:20
  from 'F:\OpenServer\OpenServer\domains\Sveta\views\default\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4bb9c9cbc40_97658935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad477dce461837da17fc2f8bee35ebbed9038be9' => 
    array (
      0 => 'F:\\OpenServer\\OpenServer\\domains\\Sveta\\views\\default\\product.tpl',
      1 => 1607777177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4bb9c9cbc40_97658935 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img src="/www/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="" width="200">
<div>
Стоимость : <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>


<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme" <?php }?> onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" alt="Удалить из корзины">Удалить из корзины</a>
<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>class="hideme" <?php }?> onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" href="#" alt="Добавить в корзину">Добавить в корзину</a>
<p>Описание<br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p>
</div><?php }
}
