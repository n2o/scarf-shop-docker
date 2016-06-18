<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-18 14:28:27
         compiled from "/var/www/default/shop/templates/tpl_modified/module/login.html" */ ?>
<?php /*%%SmartyHeaderCode:159681157857653e6b31a766-11958855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9618b3cd2831949294b019e5d7a41d870a573ced' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/module/login.html',
      1 => 1455140366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159681157857653e6b31a766-11958855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'info_message' => 0,
    'FORM_ACTION' => 0,
    'INPUT_MAIL' => 0,
    'INPUT_PASSWORD' => 0,
    'INPUT_CODE' => 0,
    'VVIMG' => 0,
    'LINK_LOST_PASSWORD' => 0,
    'BUTTON_LOGIN' => 0,
    'FORM_END' => 0,
    'account_option' => 0,
    'BUTTON_NEW_ACCOUNT' => 0,
    'BUTTON_GUEST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57653e6b4ef923_27614089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57653e6b4ef923_27614089')) {function content_57653e6b4ef923_27614089($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("login", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("newsletter", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<h1><?php echo $_smarty_tpl->getConfigVariable('heading_login');?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['info_message']->value!='') {?><div class="<?php if (isset($_GET['info'])&&$_GET['info']=='1') {?>info<?php } else { ?>error<?php }?>message"><?php echo $_smarty_tpl->tpl_vars['info_message']->value;?>
</div><?php }?>

<div class="twoColums">
  <div class="highlightbox cf">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_returning');?>
</h4>
    <?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

    <p><?php echo $_smarty_tpl->getConfigVariable('text_returning');?>
</p>
    <?php if ($_GET['order_id']) {?>
      <?php echo $_smarty_tpl->getConfigVariable('text_after_login1');?>

    <?php } elseif ($_GET['review_prod_id']) {?>
      <?php echo $_smarty_tpl->getConfigVariable('text_after_login2');?>

    <?php } else { ?>
      <?php echo $_smarty_tpl->getConfigVariable('text_after_login');?>

    <?php }?>
    <br />  
    <table>
      <tr>
        <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_email');?>
</span><?php echo $_smarty_tpl->tpl_vars['INPUT_MAIL']->value;?>
</td>
      </tr>
      <tr>
        <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_password');?>
</span><?php echo $_smarty_tpl->tpl_vars['INPUT_PASSWORD']->value;?>
</td>
      </tr>
      <?php if ($_smarty_tpl->tpl_vars['INPUT_CODE']->value) {?>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_sec_code');?>
</span><?php echo $_smarty_tpl->tpl_vars['VVIMG']->value;?>
</td>
        </tr>
        <tr>
          <td><span class="fieldtext"><?php echo $_smarty_tpl->getConfigVariable('text_sec_code');?>
</span><?php echo $_smarty_tpl->tpl_vars['INPUT_CODE']->value;?>
</td>
        </tr>
      <?php }?>
    </table>
    <div class="button_left"><a class="black" href="<?php echo $_smarty_tpl->tpl_vars['LINK_LOST_PASSWORD']->value;?>
"><?php echo $_smarty_tpl->getConfigVariable('text_lost_password');?>
</a></div>
    <div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_LOGIN']->value;?>
</div>
    <?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

  </div>
</div>

<div class="twoColums last">
  <?php if ($_smarty_tpl->tpl_vars['account_option']->value=='account'||$_smarty_tpl->tpl_vars['account_option']->value=='both') {?>
  <div class="highlightbox cf">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_new');?>
</h4>
    <p><?php echo $_smarty_tpl->getConfigVariable('text_new');?>
</p>
    <div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_NEW_ACCOUNT']->value;?>
</div>
  </div>
  <?php }?> 

  <?php if ($_smarty_tpl->tpl_vars['account_option']->value=='both'||$_smarty_tpl->tpl_vars['account_option']->value=='guest') {?>
  <br />
  <div class="highlightbox cf">
    <h4><?php echo $_smarty_tpl->getConfigVariable('title_guest');?>
</h4>
    <p><?php echo $_smarty_tpl->getConfigVariable('text_guest');?>
</p>
    <div class="button_right"><?php echo $_smarty_tpl->tpl_vars['BUTTON_GUEST']->value;?>
</div>
  </div>
  <?php }?>
</div>
<?php }} ?>
