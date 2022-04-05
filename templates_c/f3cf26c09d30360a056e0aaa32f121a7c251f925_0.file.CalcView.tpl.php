<?php
/* Smarty version 4.1.0, created on 2022-04-02 14:49:59
  from 'C:\xampp\htdocs\php_07_routing\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62484677c61467_45721679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3cf26c09d30360a056e0aaa32f121a7c251f925' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_07_routing\\app\\views\\CalcView.tpl',
      1 => 1648903726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_62484677c61467_45721679 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194510700862484677c54496_61043695', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_194510700862484677c54496_61043695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_194510700862484677c54496_61043695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
	<legend>Kalkulator kredytowy</legend>
	<fieldset>
             <div class="row">
        <div class="col-6">

            <!-- Form -->
            

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute">
                    <div class="field">
                        <div class="col-6">
                            <input type="text" name="a" id="a" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->a;?>
" placeholder="Kwota kredytu" />
                        </div>
                        <div class="col-6">
                            <input type="text" name="b" id="b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->b;?>
" placeholder="Liczba lat" />
                        </div>
                        <div class="col-6">
                            <input type="text" name="c" id="c" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->c;?>
" placeholder="Oprocentowanie" />
                        </div>

                        <div class="col-6">
                            <ul class="actions">
                                <li><input type="submit" value="Oblicz ratę kredytu" /></li>
                               
                            </ul>
                        </div>
                    </div>
                </form>

                <hr />
            
        
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
