<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-18 14:29:56
         compiled from "/var/www/default/shop/templates/tpl_modified/module/account.html" */ ?>
<?php /*%%SmartyHeaderCode:106924110557653ec4e5e434-13708013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41e9c097c651ef1b62d67b47d2b1616a7e72d45c' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/module/account.html',
      1 => 1455804602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106924110557653ec4e5e434-13708013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'error_message' => 0,
    'products_history' => 0,
    'LINK_LOGIN' => 0,
    'LINK_EDIT' => 0,
    'LINK_ADDRESS' => 0,
    'LINK_EXPRESS' => 0,
    'LINK_PASSWORD' => 0,
    'LINK_DELETE' => 0,
    'order_content' => 0,
    'order_data' => 0,
    'tracking_data' => 0,
    'LINK_ALL' => 0,
    'LINK_NEWSLETTER' => 0,
    'prod_history_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57653ec50752a4_92252099',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57653ec50752a4_92252099')) {function content_57653ec50752a4_92252099($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_onlytext')) include '/var/www/default/shop/includes/external/smarty/plugins/modifier.onlytext.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("account", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<h1><?php echo $_smarty_tpl->getConfigVariable('heading_account');?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?><div class="errormessage"><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
</div><?php }?>

<div class="twoColums">
  <div class="highlightbox">
    <?php if (!$_smarty_tpl->tpl_vars['products_history']->value||!isset($_SESSION['customer_id'])) {?>
      <h4><?php echo $_smarty_tpl->getConfigVariable('title_welcome');?>
</h4>
      <?php if ($_smarty_tpl->getConfigVariable('text_welcome')) {?>
        <p><?php echo $_smarty_tpl->getConfigVariable('text_welcome');?>
</p>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['LINK_LOGIN']->value) {?>
        <p><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_LOGIN']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('text_login');?>
</strong></a></p>
      <?php }?>
    <?php }?>
    <?php if (isset($_SESSION['customer_id'])) {?>
      <h4><?php echo $_smarty_tpl->getConfigVariable('title_account');?>
</h4>
      <ul>
        <li><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_EDIT']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('text_edit');?>
</strong></a></li>
        <li><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_ADDRESS']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('text_address');?>
</strong></a></li>
        <?php if (isset($_smarty_tpl->tpl_vars['LINK_EXPRESS']->value)) {?>
          <li><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_EXPRESS']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('text_express_checkout');?>
</strong></a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['LINK_PASSWORD']->value) {?>
          <li><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_PASSWORD']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('text_password');?>
</strong></a></li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['LINK_DELETE']->value) {?>
          <li><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_DELETE']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('text_delete');?>
</strong></a></li>
        <?php }?>
      </ul>
    <?php }?>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['order_content']->value) {?>
  <br />
  <div class="highlightbox">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_orders');?>
</h4>
		<?php  $_smarty_tpl->tpl_vars['order_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_data']->key => $_smarty_tpl->tpl_vars['order_data']->value) {
$_smarty_tpl->tpl_vars['order_data']->_loop = true;
?>
    	<p class="cf">
      <span class="account_actions_right">
        <?php if (isset($_smarty_tpl->tpl_vars['order_data']->value['BUTTON_CART_EXPRESS'])) {
echo $_smarty_tpl->tpl_vars['order_data']->value['BUTTON_CART_EXPRESS'];
}?>
        <?php echo $_smarty_tpl->tpl_vars['order_data']->value['BUTTON_CART'];?>

      </span>
      <strong><a href="<?php echo $_smarty_tpl->tpl_vars['order_data']->value['ORDER_LINK'];?>
"><?php echo $_smarty_tpl->tpl_vars['order_data']->value['ORDER_DATE'];?>
</a> / <?php echo $_smarty_tpl->getConfigVariable('order_nr');
echo $_smarty_tpl->tpl_vars['order_data']->value['ORDER_ID'];?>
</strong><br />
			<strong><?php echo $_smarty_tpl->getConfigVariable('order_total');?>
</strong><?php echo $_smarty_tpl->tpl_vars['order_data']->value['ORDER_TOTAL'];?>
<br />
			<strong><?php echo $_smarty_tpl->getConfigVariable('order_status');?>
</strong><?php echo $_smarty_tpl->tpl_vars['order_data']->value['ORDER_STATUS'];?>
<br />
			<?php if (count($_smarty_tpl->tpl_vars['order_data']->value['TRACKING'])>0) {?>
			  <?php  $_smarty_tpl->tpl_vars['tracking_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tracking_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_data']->value['TRACKING']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tracking_data']->key => $_smarty_tpl->tpl_vars['tracking_data']->value) {
$_smarty_tpl->tpl_vars['tracking_data']->_loop = true;
?>
			    <?php echo $_smarty_tpl->getConfigVariable('label_tracking');?>
 <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['tracking_data']->value['tracking_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['tracking_data']->value['parcel_id'];?>
</a><br />
			  <?php } ?>
			<?php }?>
      </p>
			<div class="hr_1"></div>
		<?php } ?>
		<p><a href="<?php echo $_smarty_tpl->tpl_vars['LINK_ALL']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_all');?>
</a></p>
  </div>
  <?php }?>
</div>

<div class="twoColums last">
  <div class="highlightbox plainright">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_notification');?>
</h4>
    <ul>
      <li><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_NEWSLETTER']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_newsletter');?>
</a></li>
    </ul>
  </div>

  <?php if ($_smarty_tpl->tpl_vars['products_history']->value) {?>
  <br />
  <div class="highlightbox plainright">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_viewed_products');?>
</h4>
    <ul class="historylist">
    <?php  $_smarty_tpl->tpl_vars['prod_history_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod_history_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['prod_history_data']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['prod_history_data']->key => $_smarty_tpl->tpl_vars['prod_history_data']->value) {
$_smarty_tpl->tpl_vars['prod_history_data']->_loop = true;
 $_smarty_tpl->tpl_vars['prod_history_data']->index++;
 $_smarty_tpl->tpl_vars['prod_history_data']->first = $_smarty_tpl->tpl_vars['prod_history_data']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['history_products']['first'] = $_smarty_tpl->tpl_vars['prod_history_data']->first;
?>
      <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['history_products']['first']) {?>first <?php }?>cf">
        <span class="hl_image cf">
        <?php if ($_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_IMAGE']!='') {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_LINK'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_IMAGE'];?>
" alt="<?php echo smarty_modifier_onlytext($_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_NAME']);?>
" /></a>
        <?php } else { ?>
          &nbsp;
        <?php }?>
        </span>
        <span class="hl_text">
          <span class="hl_text_entry"><a href="<?php echo $_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_LINK'];?>
"><?php echo $_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_NAME'];?>
</a></span>
          <span class="hl_text_entry"><strong><?php echo $_smarty_tpl->getConfigVariable('text_goto_cat');?>
</strong> <a href="<?php echo $_smarty_tpl->tpl_vars['prod_history_data']->value['CAT_URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['prod_history_data']->value['CATEGORIES_NAME'];?>
</a></span>
        </span>
        <span class="hl_price">
          <?php  $_smarty_tpl->tpl_vars['price_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['price_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['prod_history_data']->value['PRODUCTS_PRICE_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['price_data']->key => $_smarty_tpl->tpl_vars['price_data']->value) {
$_smarty_tpl->tpl_vars['price_data']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)@constant('CURRENT_TEMPLATE'))."/module/includes/price_box.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php } ?>
        </span>
      </li>
    <?php } ?>
    </ul>
  </div>
  <?php }?>
</div>  <?php }} ?>
