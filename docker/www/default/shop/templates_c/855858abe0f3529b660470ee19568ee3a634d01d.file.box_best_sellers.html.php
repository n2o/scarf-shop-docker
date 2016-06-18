<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_best_sellers.html" */ ?>
<?php /*%%SmartyHeaderCode:771492607574f4a2ce30be8-78448892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '855858abe0f3529b660470ee19568ee3a634d01d' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_best_sellers.html',
      1 => 1447418150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '771492607574f4a2ce30be8-78448892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'box_content' => 0,
    'box_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2ce6e6f0_97330787',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2ce6e6f0_97330787')) {function content_574f4a2ce6e6f0_97330787($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/var/www/default/shop/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['box_content']->value)&&count($_smarty_tpl->tpl_vars['box_content']->value)>0) {?>
<br class="clearfix" />
<div class="headline_big"><?php echo $_smarty_tpl->getConfigVariable('heading_best_sellers');?>
</div>
<div class="bxcarousel_box_bestseller">
  <ul class="bxcarousel_bestseller">
  <?php  $_smarty_tpl->tpl_vars['box_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['box_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['box_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['box_data']->key => $_smarty_tpl->tpl_vars['box_data']->value) {
$_smarty_tpl->tpl_vars['box_data']->_loop = true;
?>
  <li>
    <div class="carousel_box">
      <a href="<?php echo $_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_LINK'];?>
" title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_NAME']);?>
">
        <span class="cb_image"><?php if ($_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_IMAGE']) {?><img src="<?php echo $_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_NAME']);?>
" title="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_NAME']);?>
" /><?php }?></span>
        <span class="cb_title"><?php echo mb_substr($_smarty_tpl->tpl_vars['box_data']->value['PRODUCTS_NAME'],"0","18","UTF-8");?>
</span>
      </a>
    </div>
  </li>
  <?php } ?>
</ul>
<br class="clearfix" />
</div>
<?php }?><?php }} ?>
