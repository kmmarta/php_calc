<?php
/* Smarty version 4.1.0, created on 2022-04-11 22:11:51
  from 'C:\xampp\htdocs\bdtest\app\views\templates\database_records.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62548b87b93f94_36060838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b0123d010c1c1e9186534aadc967f99a03e822' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bdtest\\app\\views\\templates\\database_records.tpl',
      1 => 1649707909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62548b87b93f94_36060838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?> 
        <li><b>idwynik</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['idwynik'];?>
||||<b> kwota</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['kwota'];?>
||||<b> liczba lat</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['lat'];?>
||||<b> procent</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['procent'];?>
||||<b> rata</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['rata'];?>
||||<b> data</b>: <?php echo $_smarty_tpl->tpl_vars['item']->value['data'];?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol><?php }
}
