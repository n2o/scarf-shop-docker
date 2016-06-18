<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_infobox.html" */ ?>
<?php /*%%SmartyHeaderCode:1096290769574f4a2cce6a67-41992179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3c3a2df37f77d827de6cae349cf0668aea6c4d8' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_infobox.html',
      1 => 1427726422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1096290769574f4a2cce6a67-41992179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'BOX_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2ccf7a29_54096295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2ccf7a29_54096295')) {function content_574f4a2ccf7a29_54096295($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)) {
echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;
}?><?php }} ?>
