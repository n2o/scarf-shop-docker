<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_categories.html" */ ?>
<?php /*%%SmartyHeaderCode:1253836393574f4a2c654220-31202440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69f715badb9bfcab5675fbde53a39bfe0762828' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_categories.html',
      1 => 1427726422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253836393574f4a2c654220-31202440',
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
  'unifunc' => 'content_574f4a2c7bafa2_14124604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2c7bafa2_14124604')) {function content_574f4a2c7bafa2_14124604($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['BOX_CONTENT']->value)&&$_smarty_tpl->tpl_vars['BOX_CONTENT']->value!='') {?>
  <div class="box_category">
    <div class="box_category_header"><?php echo $_smarty_tpl->getConfigVariable('heading_categories');?>
</div>
    <div class="box_category_line"></div>
    <ul id="categorymenu">
      <?php echo $_smarty_tpl->tpl_vars['BOX_CONTENT']->value;?>

      <?php if (@constant('SPECIALS_CATEGORIES')===true) {?>
        <?php if (@constant('SPECIALS_EXISTS')===true) {?>
          <li class="level1<?php if (strstr($_SERVER['PHP_SELF'],@constant('FILENAME_SPECIALS'))) {?> active1<?php }?>"><a href="<?php echo xtc_href_link(@constant('FILENAME_SPECIALS'));?>
"><?php echo $_smarty_tpl->getConfigVariable('heading_specials');?>
</a></li>
        <?php }?>
      <?php }?>
      <?php if (@constant('WHATSNEW_CATEGORIES')===true) {?>
        
          <li class="level1<?php if (strstr($_SERVER['PHP_SELF'],@constant('FILENAME_PRODUCTS_NEW'))) {?> active1<?php }?>"><a href="<?php echo xtc_href_link(@constant('FILENAME_PRODUCTS_NEW'));?>
"><?php echo $_smarty_tpl->getConfigVariable('heading_whatsnew');?>
</a></li>
        
      <?php }?>
    </ul>
  </div>
<?php }?><?php }} ?>
