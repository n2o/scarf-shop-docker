<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_login.html" */ ?>
<?php /*%%SmartyHeaderCode:1034475867574f4a2ccffb37-04794906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d4e8afa1f756cd3609c8d079a95bd0ccc506432' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_login.html',
      1 => 1427726422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1034475867574f4a2ccffb37-04794906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'FIELD_EMAIL' => 0,
    'FIELD_PWD' => 0,
    'LINK_LOST_PASSWORD' => 0,
    'BUTTON' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2cd3d7e4_49542933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cd3d7e4_49542933')) {function content_574f4a2cd3d7e4_49542933($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['FORM_ACTION']->value)&&$_smarty_tpl->tpl_vars['FORM_ACTION']->value!='') {?>
  <div class="box1">
    <div class="box_header"><?php echo $_smarty_tpl->getConfigVariable('heading_login');?>
</div>
    <div class="box_line"></div>
    <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

    <p class="box_sub"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
:</p>
    <?php echo $_smarty_tpl->tpl_vars['FIELD_EMAIL']->value;?>

    <p class="box_sub"><?php echo $_smarty_tpl->getConfigVariable('text_pwd');?>
:</p>
    <?php echo $_smarty_tpl->tpl_vars['FIELD_PWD']->value;?>

    <div class="box_sub_button cf">
      <a href="<?php echo $_smarty_tpl->tpl_vars['LINK_LOST_PASSWORD']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_password_forgotten');?>
</a>
      <?php echo $_smarty_tpl->tpl_vars['BUTTON']->value;?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

  </div>
<?php }?><?php }} ?>
