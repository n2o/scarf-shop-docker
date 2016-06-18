<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:45
         compiled from "/var/www/default/shop/templates/tpl_modified/index.html" */ ?>
<?php /*%%SmartyHeaderCode:234859325574f4a2d0d11f7-30428040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3065950a30db3d948a47e98a84aaa40b534cead2' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/index.html',
      1 => 1456825538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234859325574f4a2d0d11f7-30428040',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'box_ADMIN' => 0,
    'box_INFOBOX' => 0,
    'box_LANGUAGES' => 0,
    'account' => 0,
    'logoff' => 0,
    'create_account' => 0,
    'login' => 0,
    'index' => 0,
    'store_name' => 0,
    'box_SEARCH' => 0,
    'home' => 0,
    'box_CATEGORIES' => 0,
    'box_ADD_QUICKIE' => 0,
    'box_LOGIN' => 0,
    'box_WHATSNEW' => 0,
    'box_SPECIALS' => 0,
    'box_LAST_VIEWED' => 0,
    'box_REVIEWS' => 0,
    'box_MANUFACTURERS' => 0,
    'box_MANUFACTURERS_INFO' => 0,
    'box_CURRENCIES' => 0,
    'box_HISTORY' => 0,
    'box_TRUSTEDSHOPS' => 0,
    'checkout' => 0,
    'box_CART' => 0,
    'box_WISHLIST' => 0,
    'SLIDER' => 0,
    'slider' => 0,
    'BANNER' => 0,
    'main_content' => 0,
    'box_BESTSELLERS' => 0,
    'fullcontent' => 0,
    'navtrail' => 0,
    'bestseller' => 0,
    'box_CONTENT' => 0,
    'box_INFORMATION' => 0,
    'box_MISCELLANEOUS' => 0,
    'box_NEWSLETTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2d3ca239_00175624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2d3ca239_00175624')) {function content_574f4a2d3ca239_00175624($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/default/shop/includes/external/smarty/smarty_3/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_piwik')) include '/var/www/default/shop/includes/external/smarty/plugins/function.piwik.php';
if (!is_callable('smarty_function_googleanalytics')) include '/var/www/default/shop/includes/external/smarty/plugins/function.googleanalytics.php';
if (!is_callable('smarty_function_facebook')) include '/var/www/default/shop/includes/external/smarty/plugins/function.facebook.php';
?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("index", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php if (isset($_smarty_tpl->tpl_vars['box_ADMIN']->value)) {?><div class="adminspacer"></div><?php echo $_smarty_tpl->tpl_vars['box_ADMIN']->value;
}?>
<div id="layout_navbar">
  <div id="layout_navbar_inner">
    <?php if (isset($_smarty_tpl->tpl_vars['box_INFOBOX']->value)) {?><div id="customers_group"><?php echo $_smarty_tpl->tpl_vars['box_INFOBOX']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['box_LANGUAGES']->value)) {?><div id="languages"><?php echo $_smarty_tpl->tpl_vars['box_LANGUAGES']->value;?>
</div><?php }?>
    <ul class="topnavigation"> 
      <?php if (isset($_smarty_tpl->tpl_vars['account']->value)) {?>
        <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_account');?>
</a></li>
      <?php }?>
      <?php if (isset($_SESSION['customer_id'])) {?>
        <li<?php if (!isset($_smarty_tpl->tpl_vars['account']->value)) {?> class="first"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['logoff']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_logoff');?>
</a></li>
      <?php } else { ?>
        <li<?php if (!isset($_smarty_tpl->tpl_vars['account']->value)) {?> class="first"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['create_account']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('new_customer');?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_login');?>
</a></li>
      <?php }?>
    </ul>
  </div>
</div>


<div id="layout_logo">
  <div id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" title="<?php echo $_smarty_tpl->getConfigVariable('link_index');?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['store_name']->value;?>
">&nbsp;</a></div>
  <?php if (isset($_smarty_tpl->tpl_vars['box_SEARCH']->value)) {?><div id="search"><?php echo $_smarty_tpl->tpl_vars['box_SEARCH']->value;?>
</div><?php }?>
</div>


<div id="layout_content" class="cf">
  <?php if (isset($_smarty_tpl->tpl_vars['home']->value)&&$_smarty_tpl->tpl_vars['home']->value==true) {?>
    <div id="col_left">
      <?php if (isset($_smarty_tpl->tpl_vars['box_CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CATEGORIES']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value)) {
echo $_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_LOGIN']->value)) {
echo $_smarty_tpl->tpl_vars['box_LOGIN']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_WHATSNEW']->value)) {
echo $_smarty_tpl->tpl_vars['box_WHATSNEW']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_SPECIALS']->value)) {
echo $_smarty_tpl->tpl_vars['box_SPECIALS']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value)) {
echo $_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_REVIEWS']->value)) {
echo $_smarty_tpl->tpl_vars['box_REVIEWS']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_CURRENCIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CURRENCIES']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_HISTORY']->value)) {
echo $_smarty_tpl->tpl_vars['box_HISTORY']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value)) {
echo $_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value;
}?>
    </div>
    
    <div id="col_right">
      <div id="content_navbar">
        <ul class="contentnavigation"> 
          <li class="first"><a href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=7');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_contact');?>
</a></li>
          <li><a href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=4');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_imprint');?>
</a></li>
          <li class="last"><a href="<?php echo $_smarty_tpl->tpl_vars['checkout']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('link_checkout');?>
</strong></a></li>
          <?php if (isset($_smarty_tpl->tpl_vars['box_CART']->value)) {?><li class="cart"><?php echo $_smarty_tpl->tpl_vars['box_CART']->value;?>
</li><?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['box_WISHLIST']->value)) {?><li class="wishlist"><?php echo $_smarty_tpl->tpl_vars['box_WISHLIST']->value;?>
</li><?php }?>
        </ul>
      </div>
      <?php if (isset($_smarty_tpl->tpl_vars['SLIDER']->value)) {?>
        <div class="content_banner cf">
          <ul class="bxcarousel_slider">
          <?php  $_smarty_tpl->tpl_vars['slider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SLIDER']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->key => $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->_loop = true;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['slider']->value['IMAGE'];?>
</li>
          <?php } ?>
          </ul>
        </div>
      <?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['BANNER']->value)) {?><div class="content_banner cf"><?php echo $_smarty_tpl->tpl_vars['BANNER']->value;?>
</div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_BESTSELLERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_BESTSELLERS']->value;
}?>
    </div>
    
  <?php } elseif (isset($_smarty_tpl->tpl_vars['fullcontent']->value)&&$_smarty_tpl->tpl_vars['fullcontent']->value==true) {?>
    <div id="col_full" class="cf">
      <div id="content_navbar">
        <ul class="contentnavigation">
          <li class="first"><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('link_index');?>
</a></li>
          <li><a href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=7');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_contact');?>
</a></li>
          <li><a href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=4');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_imprint');?>
</a></li>
          <li class="last"><a href="<?php echo $_smarty_tpl->tpl_vars['checkout']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('link_checkout');?>
</strong></a></li>
          <?php if (isset($_smarty_tpl->tpl_vars['box_CART']->value)) {?><li class="cart"><?php echo $_smarty_tpl->tpl_vars['box_CART']->value;?>
</li><?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['box_WISHLIST']->value)) {?><li class="wishlist"><?php echo $_smarty_tpl->tpl_vars['box_WISHLIST']->value;?>
</li><?php }?>
        </ul>
      </div>
      <?php if (isset($_smarty_tpl->tpl_vars['navtrail']->value)) {?><div id="breadcrumb"><span class="breadcrumb_info"><?php echo $_smarty_tpl->getConfigVariable('text_here');?>
</span><?php echo $_smarty_tpl->tpl_vars['navtrail']->value;?>
</div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}?>
      <?php if ($_smarty_tpl->tpl_vars['bestseller']->value) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['box_BESTSELLERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_BESTSELLERS']->value;
}?>
      <?php }?>
    </div>
    
  <?php } else { ?>
    <div id="col_left">
      <?php if (isset($_smarty_tpl->tpl_vars['box_CATEGORIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CATEGORIES']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value)) {
echo $_smarty_tpl->tpl_vars['box_ADD_QUICKIE']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_LOGIN']->value)) {
echo $_smarty_tpl->tpl_vars['box_LOGIN']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_WHATSNEW']->value)) {
echo $_smarty_tpl->tpl_vars['box_WHATSNEW']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_SPECIALS']->value)) {
echo $_smarty_tpl->tpl_vars['box_SPECIALS']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value)) {
echo $_smarty_tpl->tpl_vars['box_LAST_VIEWED']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_REVIEWS']->value)) {
echo $_smarty_tpl->tpl_vars['box_REVIEWS']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value)) {
echo $_smarty_tpl->tpl_vars['box_MANUFACTURERS_INFO']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_CURRENCIES']->value)) {
echo $_smarty_tpl->tpl_vars['box_CURRENCIES']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_HISTORY']->value)) {
echo $_smarty_tpl->tpl_vars['box_HISTORY']->value;
}?>
      <?php if (isset($_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value)) {
echo $_smarty_tpl->tpl_vars['box_TRUSTEDSHOPS']->value;
}?>
    </div>
    
    <div id="col_right">
      <div id="content_navbar">
        <ul class="contentnavigation"> 
          <li class="first"><a href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=7');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_contact');?>
</a></li>
          <li><a href="<?php echo xtc_href_link(@constant('FILENAME_CONTENT'),'coID=4');?>
"><?php echo $_smarty_tpl->getConfigVariable('link_imprint');?>
</a></li>
          <li class="last"><a href="<?php echo $_smarty_tpl->tpl_vars['checkout']->value;?>
"><strong><?php echo $_smarty_tpl->getConfigVariable('link_checkout');?>
</strong></a></li>
          <?php if (isset($_smarty_tpl->tpl_vars['box_CART']->value)) {?><li class="cart"><?php echo $_smarty_tpl->tpl_vars['box_CART']->value;?>
</li><?php }?>
          <?php if (isset($_smarty_tpl->tpl_vars['box_WISHLIST']->value)) {?><li class="wishlist"><?php echo $_smarty_tpl->tpl_vars['box_WISHLIST']->value;?>
</li><?php }?>
        </ul>
      </div>
      <?php if (isset($_smarty_tpl->tpl_vars['navtrail']->value)) {?><div id="breadcrumb"><span class="breadcrumb_info"><?php echo $_smarty_tpl->getConfigVariable('text_here');?>
</span><?php echo $_smarty_tpl->tpl_vars['navtrail']->value;?>
</div><?php }?>
      <?php if (isset($_smarty_tpl->tpl_vars['main_content']->value)) {
echo $_smarty_tpl->tpl_vars['main_content']->value;
}?>
      <?php if ($_smarty_tpl->tpl_vars['bestseller']->value) {
if (isset($_smarty_tpl->tpl_vars['box_BESTSELLERS']->value)) {
echo $_smarty_tpl->tpl_vars['box_BESTSELLERS']->value;
}
}?>
    </div>
    
  <?php }?>        
</div>


<div id="layout_footer">
  <div id="layout_footer_inner" class="cf">
    <?php if (isset($_smarty_tpl->tpl_vars['box_CONTENT']->value)) {?><div class="footer_box first"><?php echo $_smarty_tpl->tpl_vars['box_CONTENT']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['box_INFORMATION']->value)) {?><div class="footer_box"><?php echo $_smarty_tpl->tpl_vars['box_INFORMATION']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['box_MISCELLANEOUS']->value)) {?><div class="footer_box"><?php echo $_smarty_tpl->tpl_vars['box_MISCELLANEOUS']->value;?>
</div><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['box_NEWSLETTER']->value)) {?><div class="footer_box"><?php echo $_smarty_tpl->tpl_vars['box_NEWSLETTER']->value;?>
</div><?php }?>
  </div>
  <div class="mod_copyright"><?php echo @constant('TITLE');?>
 &copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 | Template &copy; 2009-<?php echo smarty_modifier_date_format(time(),"%Y");?>
 by <span class="cop_magenta">mod</span><span class="cop_grey">ified eCommerce Shopsoftware</span></div>
</div>


<?php if ((@constant('TRACKING_COUNT_ADMIN_ACTIVE')=='true'&&$_SESSION['customers_status']['customers_status_id']=='0')||$_SESSION['customers_status']['customers_status_id']!='0') {?>
  <?php if (@constant('TRACKING_PIWIK_ACTIVE')=='true') {?>
    <?php echo smarty_function_piwik(array('url'=>@constant('TRACKING_PIWIK_LOCAL_PATH'),'id'=>@constant('TRACKING_PIWIK_ID'),'goal'=>@constant('TRACKING_PIWIK_GOAL')),$_smarty_tpl);?>

  <?php }?>
  <?php if (@constant('TRACKING_GOOGLEANALYTICS_ACTIVE')=='true') {?>
    <?php echo smarty_function_googleanalytics(array('account'=>@constant('TRACKING_GOOGLEANALYTICS_ID')),$_smarty_tpl);?>

  <?php }?>
  <?php if (@constant('TRACKING_FACEBOOK_ACTIVE')=='true') {?>
    <?php echo smarty_function_facebook(array('id'=>@constant('TRACKING_FACEBOOK_ID')),$_smarty_tpl);?>

  <?php }?>
<?php }?><?php }} ?>
