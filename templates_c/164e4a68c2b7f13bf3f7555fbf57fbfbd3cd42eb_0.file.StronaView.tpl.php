<?php
/* Smarty version 4.1.0, created on 2022-04-12 06:41:02
  from 'C:\xampp\htdocs\bdtest\app\views\StronaView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625502decc6647_86885073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '164e4a68c2b7f13bf3f7555fbf57fbfbd3cd42eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bdtest\\app\\views\\StronaView.tpl',
      1 => 1649738459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:database_records.tpl' => 1,
  ),
),false)) {
function content_625502decc6647_86885073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



 

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_404747445625502deca92c6_06531344', 'content');
?>











<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_404747445625502deca92c6_06531344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_404747445625502deca92c6_06531344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <p> użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
        <div class="row">
            
        
</p>
<section>
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute"  class="pure-menu-heading pure-menu-linkn">Powrót do kalkulatora</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">Wyloguj się</a>
                </li>
            </ul>
            
        </section>


        <section>
            <div class="row">
                <h2> HISTORIA WYNIKÓW: </h2>
                    <?php $_smarty_tpl->_subTemplateRender('file:database_records.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
    </section>





    <?php
}
}
/* {/block 'content'} */
}
