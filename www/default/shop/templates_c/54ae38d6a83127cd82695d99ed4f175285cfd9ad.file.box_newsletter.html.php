<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_newsletter.html" */ ?>
<?php /*%%SmartyHeaderCode:1870618998574f4a2cd4b529-82913075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ae38d6a83127cd82695d99ed4f175285cfd9ad' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_newsletter.html',
      1 => 1397570540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1870618998574f4a2cd4b529-82913075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'FIELD_EMAIL' => 0,
    'BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2cd66e09_58981983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cd66e09_58981983')) {function content_574f4a2cd66e09_58981983($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box3">
  <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_guestnewsletter');?>
</div>
  <div class="box3_line"></div>
  <p class="box3_sub"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
:</p>
  <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

  <div class="newsletter_form">
    <?php echo $_smarty_tpl->tpl_vars['FIELD_EMAIL']->value;
echo $_smarty_tpl->tpl_vars['BUTTON']->value;?>

  </div>
  <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

  <p class="box3_sub"><?php echo $_smarty_tpl->getConfigVariable('text_newsletter');?>
</p>
</div><?php }} ?>
