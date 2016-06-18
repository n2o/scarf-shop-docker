<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_add_a_quickie.html" */ ?>
<?php /*%%SmartyHeaderCode:622855055574f4a2cd6e483-48871634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '356c58c6fb545261b14694bd5752d4fe6fe5c2ad' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_add_a_quickie.html',
      1 => 1421947708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '622855055574f4a2cd6e483-48871634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'INPUT_FIELD' => 0,
    'SUBMIT_BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2cd84c86_64364522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cd84c86_64364522')) {function content_574f4a2cd84c86_64364522($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_add_a_quickie');?>
</span> 
  </div>
  <div class="box_line"></div>
  <p class="midi lineheight16"><?php echo $_smarty_tpl->getConfigVariable('text_quickie');?>
</p>
  <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

  <div class="quickie_form cf">
    <?php echo $_smarty_tpl->tpl_vars['INPUT_FIELD']->value;
echo $_smarty_tpl->tpl_vars['SUBMIT_BUTTON']->value;?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

</div><?php }} ?>
