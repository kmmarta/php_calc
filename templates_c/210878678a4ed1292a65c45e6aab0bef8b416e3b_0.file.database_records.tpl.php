<?php
/* Smarty version 4.1.0, created on 2022-04-16 15:48:56
  from 'C:\xampp\htdocs\Php_calc\app\views\templates\database_records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ac948329ab5_88838801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '210878678a4ed1292a65c45e6aab0bef8b416e3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Php_calc\\app\\views\\templates\\database_records.tpl',
      1 => 1650116626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625ac948329ab5_88838801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
        <li><u>idwynik</u>: <?php echo $_smarty_tpl->tpl_vars['item']->value['idwynik'];?>
||||<u> kwota</u>: <?php echo $_smarty_tpl->tpl_vars['item']->value['kwota'];?>
||||<u> liczba lat</u>: <?php echo $_smarty_tpl->tpl_vars['item']->value['lat'];?>
||||<u> procent</u>: <?php echo $_smarty_tpl->tpl_vars['item']->value['procent'];?>
||||<u> rata</u>: <?php echo $_smarty_tpl->tpl_vars['item']->value['rata'];?>
||||<u> data</u>: <?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol><?php }
}
