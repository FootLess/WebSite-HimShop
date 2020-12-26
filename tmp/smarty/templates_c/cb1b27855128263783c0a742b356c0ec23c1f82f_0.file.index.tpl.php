<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-26 17:20:55
  from 'F:\GitHub\WebSite-HimShop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe746c7bab545_55498502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1b27855128263783c0a742b356c0ec23c1f82f' => 
    array (
      0 => 'F:\\GitHub\\WebSite-HimShop\\views\\default\\index.tpl',
      1 => 1607738602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe746c7bab545_55498502 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
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
            <img src="../www/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
        </a>
        <a href="?controller=product&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/" class="itemProductLink"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
    </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
