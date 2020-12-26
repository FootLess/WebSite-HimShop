<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-12 15:30:21
  from 'F:\OpenServer\OpenServer\domains\Sveta\views\default\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd4b7dde609e3_82980361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b0137a58f558c5e4895b62e2f399b05e54e550b' => 
    array (
      0 => 'F:\\OpenServer\\OpenServer\\domains\\Sveta\\views\\default\\category.tpl',
      1 => 1607776217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd4b7dde609e3_82980361 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['rsCategory']->value['name'];?>
</h1>
<div class="row">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 1) {?>
        <div class="d-flex flex-column rounded itemProduct">
            <a href="?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
                <img src="www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100">
            </a><br />
            <a href="?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"  class="itemProductLink"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsChildCats']->value, 'item', false, NULL, 'childCats', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <h2><a href="?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></h2>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((!$_smarty_tpl->tpl_vars['rsProducts']->value) && (!$_smarty_tpl->tpl_vars['rsChildCats']->value)) {?>
    Ничего не найдено
<?php }
}
}
