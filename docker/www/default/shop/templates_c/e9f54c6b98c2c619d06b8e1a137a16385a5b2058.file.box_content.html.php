<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_content.html" */ ?>
<?php /*%%SmartyHeaderCode:1238411287574f4a2cc54829-67299768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f54c6b98c2c619d06b8e1a137a16385a5b2058' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_content.html',
      1 => 1427726422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1238411287574f4a2cc54829-67299768',
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
  'unifunc' => 'content_574f4a2cc6f3e8_77585421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cc6f3e8_77585421')) {function content_574f4a2cc6f3e8_77585421($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box3">
    <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_content');?>
</div>
    <div class="box3_line"></div>
    <ul class="footerlist">
      <?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>

    </ul>
  </div>
<?php }?><?php }} ?>
