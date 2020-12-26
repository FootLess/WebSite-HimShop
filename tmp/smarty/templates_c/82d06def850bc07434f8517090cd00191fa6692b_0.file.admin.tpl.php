<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-10 17:07:08
  from 'F:\OpenServer\OpenServer\domains\Sveta\views\admin\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd22b8ca83bd0_34180694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82d06def850bc07434f8517090cd00191fa6692b' => 
    array (
      0 => 'F:\\OpenServer\\OpenServer\\domains\\Sveta\\views\\admin\\admin.tpl',
      1 => 1607044830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd22b8ca83bd0_34180694 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm">
    <div id="blockNewCategory">
        Новая категория:
        <input type="text" name="newCategoryName" id="newCategoryName" value="">
        <br>

        Является подкатегория для
        <select name="generalCatId" class="form-control form-control-sm">
            <option value="0">Главная категория
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <br>
        <input type="button" onclick="newCategory()" value="Добавить категорию">
    </div>
</div>
<?php }
}
