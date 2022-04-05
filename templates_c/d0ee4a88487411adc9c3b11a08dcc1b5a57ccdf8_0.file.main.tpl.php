<?php
/* Smarty version 4.1.0, created on 2022-04-05 10:06:45
  from 'C:\xampp\htdocs\Php_calc\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624bf895d01a28_44449313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0ee4a88487411adc9c3b11a08dcc1b5a57ccdf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Php_calc\\app\\views\\templates\\main.tpl',
      1 => 1648902662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624bf895d01a28_44449313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta charset="utf-8" />
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "brak tytułu" ?? null : $tmp);?>
</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
</head>
<body>
	<div style="margin: 1em;">
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1697400413624bf895cf97c0_89357535', 'content');
?>

	</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_1697400413624bf895cf97c0_89357535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1697400413624bf895cf97c0_89357535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
