<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_miscellaneous.html" */ ?>
<?php /*%%SmartyHeaderCode:330667367574f4a2ccad328-89397229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b910e46766b0c6a6617356ac71c9b53af5997f81' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_miscellaneous.html',
      1 => 1421156674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '330667367574f4a2ccad328-89397229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'tpl_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2ccc26a6_48544143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2ccc26a6_48544143')) {function content_574f4a2ccc26a6_48544143($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<div class="box3">
  <div class="box3_header"><?php echo $_smarty_tpl->getConfigVariable('heading_miscellaneous');?>
</div>
  <div class="box3_line"></div>
  <p><img src="<?php echo $_smarty_tpl->tpl_vars['tpl_path']->value;?>
img/img_footer_payment.jpg" alt="" /></p>

  <p class="box3_sub" style="font-size:10px; line-height:12px;color:#999;"><?php echo $_smarty_tpl->getConfigVariable('text_miscellaneous');?>
</p>
</div><?php }} ?>
