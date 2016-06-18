<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-01 22:48:44
         compiled from "/var/www/default/shop/templates/tpl_modified/boxes/box_search.html" */ ?>
<?php /*%%SmartyHeaderCode:1661321416574f4a2cc31457-96529367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bf942452b06cbfee8ab7eedaf8c8b7ce440fefe' => 
    array (
      0 => '/var/www/default/shop/templates/tpl_modified/boxes/box_search.html',
      1 => 1444846088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661321416574f4a2cc31457-96529367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'FORM_ACTION' => 0,
    'INPUT_SEARCH' => 0,
    'BUTTON_SUBMIT' => 0,
    'FORM_END' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_574f4a2cc48672_78793283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574f4a2cc48672_78793283')) {function content_574f4a2cc48672_78793283($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config(((string)$_smarty_tpl->tpl_vars['language']->value)."/lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("boxes", 'local'); ?>
<?php  $_config = new Smarty_Internal_Config("lang_".((string)$_smarty_tpl->tpl_vars['language']->value).".custom", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>
<?php echo $_smarty_tpl->tpl_vars['FORM_ACTION']->value;?>

<?php echo $_smarty_tpl->tpl_vars['INPUT_SEARCH']->value;
echo $_smarty_tpl->tpl_vars['BUTTON_SUBMIT']->value;?>

<br class="clearfix" />
<?php echo $_smarty_tpl->tpl_vars['FORM_END']->value;?>

<div class="suggestionsBox" id="suggestions" style="display:none;">
  <div class="suggestionList" id="autoSuggestionsList">&nbsp;</div>
</div><?php }} ?>
