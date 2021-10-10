<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:45:34
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616318aec208c5_27768125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85a9c6e230dcac1c2203d815eeb82a65d7ce5935' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616318aec208c5_27768125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1102064033616318aec1f5c5_96217501', 'step');
?>

<?php }
/* {block 'step'} */
class Block_1102064033616318aec1f5c5_96217501 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_1102064033616318aec1f5c5_96217501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title js-step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
