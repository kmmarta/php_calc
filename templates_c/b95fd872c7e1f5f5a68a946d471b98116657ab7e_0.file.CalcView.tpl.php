<?php
/* Smarty version 4.1.0, created on 2022-04-12 06:40:35
  from 'C:\xampp\htdocs\bdtest\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625502c338b8c6_29207153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95fd872c7e1f5f5a68a946d471b98116657ab7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bdtest\\app\\views\\CalcView.tpl',
      1 => 1649738434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_625502c338b8c6_29207153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53319621625502c334e715_82062301', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_53319621625502c334e715_82062301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53319621625502c334e715_82062301',
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
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
showStrona"  class="pure-menu-heading pure-menu-link"> STRONA DLA ADMINA</a>
	
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
                        <section>
<div class="row">
             
    <h2> WITAM W KALKULATORZE KREDYTOWYM</h2>
                <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/TEKILA.jpg" alt="WITAM W KALKULATORZE KREDYTOWYM" width="350" height="501" />
               
                <?php echo '<?php'; ?>


            </div>
            <p> </p>
        </section>
       
            
        
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
