<?php
/* Smarty version 4.1.0, created on 2022-04-16 15:48:56
  from 'C:\xampp\htdocs\Php_calc\app\views\StronaView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625ac948296277_07866431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ebabddc72398430bbc0019314b00abf6c11e3e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Php_calc\\app\\views\\StronaView.tpl',
      1 => 1649738459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:database_records.tpl' => 1,
  ),
),false)) {
function content_625ac948296277_07866431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



 

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151721690625ac948260bd5_14178838', 'content');
?>











<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_151721690625ac948260bd5_14178838 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151721690625ac948260bd5_14178838',
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
