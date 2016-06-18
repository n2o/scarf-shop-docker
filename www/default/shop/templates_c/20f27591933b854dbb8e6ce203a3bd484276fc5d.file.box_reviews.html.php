<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_reviews.html" */ ?>
<?php /*%%SmartyHeaderCode:779869836574f4a2ce782d4-11720878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20f27591933b854dbb8e6ce203a3bd484276fc5d' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_reviews.html',
      1 => 1432048022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '779869836574f4a2ce782d4-11720878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'REVIEWS_WRITE_REVIEW' => 0,
    'RANDOM' => 0,
    'REVIEWS_LINK' => 0,
    'PRODUCTS_LINK' => 0,
    'PRODUCTS_NAME' => 0,
    'PRODUCTS_IMAGE' => 0,
    'REVIEWS' => 0,
    'REVIEWS_IMAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2cef1cd6_52689243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cef1cd6_52689243')) {function content_574f4a2cef1cd6_52689243($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/var/www/default/shop/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['REVIEWS_WRITE_REVIEW']->value)||isset($_smarty_tpl->tpl_vars['RANDOM']->value)) {?>
<div class="box1">
  <div class="box_header">
    <span class="show_title"><?php echo $_smarty_tpl->getConfigVariable('heading_reviews');?>
</span> 
    <a class="show_all" href="<?php echo $_smarty_tpl->tpl_vars['REVIEWS_LINK']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('show_all');?>
 <span class="arrow">&raquo;</span></a>
    <br class="clearfix" />
  </div>
  <div class="box_line"></div>
  <?php if (isset($_smarty_tpl->tpl_vars['RANDOM']->value)) {?>
    <div class="box_title"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_LINK']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value;?>
</strong></a></div>
    <?php if ($_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value!='') {?><div class="box_image"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_LINK']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_IMAGE']->value;?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['PRODUCTS_NAME']->value);?>
" /></a></div><?php }?>
    <div class="box_line abstand"></div>
    <div class="box_text"><?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['REVIEWS']->value);?>
</div>
    <div class="box_reviews_image"><?php echo $_smarty_tpl->tpl_vars['REVIEWS_IMAGE']->value;?>
</div>
  <?php } else { ?>
    <p class="onlytop"><a href="<?php echo $_smarty_tpl->tpl_vars['PRODUCTS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['REVIEWS_WRITE_REVIEW']->value;?>
</a></p>
  <?php }?>
</div>
<?php }?><?php }} ?>
