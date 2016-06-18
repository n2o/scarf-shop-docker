<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_currencies.html" */ ?>
<?php /*%%SmartyHeaderCode:377274051574f4a2ceffe12-17463431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c2871302ab99ea01281a813a6598e371dbc219a' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_currencies.html',
      1 => 1427726422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377274051574f4a2ceffe12-17463431',
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
  'unifunc' => 'content_574f4a2cf24dc7_49837930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cf24dc7_49837930')) {function content_574f4a2cf24dc7_49837930($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box1">
    <div class="box_header">
      <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_currencies');?>
</span> 
    </div>
    <div class="box_line"></div>
    <div class="box_select"><?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>
</div>
  </div>
<?php }?><?php }} ?>
