<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:45
         compiled from "/var/www/default/shop/templates/tpl_modified/module/main_content.html" */ ?>
<?php /*%%SmartyHeaderCode:85179691574f4a2d0185c7-99020173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b62eb6ac124940e1a9af1fa6b6307d35ade560a4' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/module/main_content.html',
      1 => 1397813490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85179691574f4a2d0185c7-99020173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'MODULE_error' => 0,
    'title' => 0,
    'text' => 0,
    'MODULE_new_products' => 0,
    'MODULE_upcoming_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2d054372_49986184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2d054372_49986184')) {function content_574f4a2d054372_49986184($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_error']->value)) {
echo $_smarty_tpl->tpl_vars['MODULE_error']->value;
}?>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
<div class="cf"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_new_products']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['MODULE_new_products']->value;?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['MODULE_upcoming_products']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['MODULE_upcoming_products']->value;?>

<?php }?><?php }} ?>
