<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_last_viewed.html" */ ?>
<?php /*%%SmartyHeaderCode:748842121574f4a2cbab7b4-95113244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e032a79b37e514df3713246f697399d316dca0b' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_last_viewed.html',
      1 => 1439403740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '748842121574f4a2cbab7b4-95113244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'box_content' => 0,
    'CATEGORY_NAME' => 0,
    'CATEGORY_LINK' => 0,
    'MY_PERSONAL_PAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2cc21568_01983895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cc21568_01983895')) {function content_574f4a2cc21568_01983895($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/var/www/default/shop/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['box_content']->value)) {?>
  <div class="box2">
    <div class="box_header"><?php echo $_smarty_tpl->getConfigVariable('heading_last_viewed');?>
</div>
    <div class="box_line"></div>
    <div class="box_title"><a href="<?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_LINK'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_NAME'];?>
</strong></a></div>
    <?php if ($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_IMAGE']!='') {?><div class="box_image"><a href="<?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_LINK'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_NAME']);?>
" /></a></div><?php }?>
    <div class="box_price">
      <?php  $_smarty_tpl->tpl_vars['price_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_PRICE_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price_data']->key => $_smarty_tpl->tpl_vars['price_data']->value) {
$_smarty_tpl->tpl_vars['price_data']->_loop = true;
?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('CURRENT_TEMPLATE'))."/module/includes/price_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } ?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_PRICE_ARRAY'][0]['PRODUCTS_PRICE_FLAG']!='NotAllowed') {?>
      <?php if ($_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_VPE']) {?><div class="box_vpe"><?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_VPE'];?>
</div><?php }?>
      <div class="box_tax"><?php echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_TAX_INFO'];
echo $_smarty_tpl->tpl_vars['box_content']->value['PRODUCTS_SHIPPING_LINK'];?>
</div>
    <?php }?>
    <div class="box_line abstand"></div>
    <?php echo $_smarty_tpl->getConfigVariable('text_watch_category');?>

    <?php if ($_smarty_tpl->tpl_vars['CATEGORY_NAME']->value!='') {?><a href="<?php echo $_smarty_tpl->tpl_vars['CATEGORY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
 &raquo;</a><br /><?php }?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['MY_PERSONAL_PAGE']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_my_page');?>
  &raquo;</a>
  </div>
<?php }?><?php }} ?>
