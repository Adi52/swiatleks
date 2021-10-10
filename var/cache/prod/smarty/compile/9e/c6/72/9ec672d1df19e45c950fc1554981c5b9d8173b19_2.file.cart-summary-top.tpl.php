<?php
/* Smarty version 3.1.39, created on 2021-10-10 18:39:18
  from '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/checkout/_partials/cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61631736a38471_94942614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec672d1df19e45c950fc1554981c5b9d8173b19' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/classic/templates/checkout/_partials/cart-summary-top.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61631736a38471_94942614 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
