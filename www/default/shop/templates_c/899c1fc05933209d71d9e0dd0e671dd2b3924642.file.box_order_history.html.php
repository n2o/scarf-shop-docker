<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-18 14:28:35
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_order_history.html" */ ?>
<?php /*%%SmartyHeaderCode:65025789257653e73700b52-53439615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899c1fc05933209d71d9e0dd0e671dd2b3924642' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_order_history.html',
      1 => 1457434666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65025789257653e73700b52-53439615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'BOX_CONTENT' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57653e7375e4f6_45626975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57653e7375e4f6_45626975')) {function content_57653e7375e4f6_45626975($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&count($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)>0) {?>
<div class="box1">
  <div class="box_header"><?php echo $_smarty_tpl->getConfigVariable('heading_order_history');?>
</div>
  <div class="box_line"></div>
  <ul class="orderhistory_list">
  <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BOX_CONTENT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>  
    <li><?php echo $_smarty_tpl->tpl_vars['data']->value['PRODUCTS_LINK'];?>
<span class="cart_icon"><?php echo $_smarty_tpl->tpl_vars['data']->value['ORDER_LINK'];?>
</span></li>
  <?php } ?>
  </ul>
</div>
<?php }?><?php }} ?>
