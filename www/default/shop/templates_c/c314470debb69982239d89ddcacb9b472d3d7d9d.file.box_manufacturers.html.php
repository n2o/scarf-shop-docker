<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_manufacturers.html" */ ?>
<?php /*%%SmartyHeaderCode:1926636343574f4a2cb6e504-09517555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c314470debb69982239d89ddcacb9b472d3d7d9d' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_manufacturers.html',
      1 => 1427726422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1926636343574f4a2cb6e504-09517555',
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
  'unifunc' => 'content_574f4a2cb9ebd1_93469573',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cb9ebd1_93469573')) {function content_574f4a2cb9ebd1_93469573($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/default/shop/includes/external/smarty/smarty_3/plugins/modifier.replace.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_manufacturers');?>
</span> 
  </div>
  <div class="box_line"></div>
  <div class="box_select"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['BOX_CONTENT']->value,"<br />",'');?>
</div>
</div>
<?php }?><?php }} ?>
