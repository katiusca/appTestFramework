<?php /* Smarty version Smarty-3.1.20, created on 2015-03-22 21:33:18
         compiled from "../src/Templates/TemplateSmartyShowUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:910146704550f351edec930-74443223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c629fc45a8bc38930cd23f491b60682073792fe0' => 
    array (
      0 => '../src/Templates/TemplateSmartyShowUser.tpl',
      1 => 1427055867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '910146704550f351edec930-74443223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'values' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_550f351ee6e8b1_52237794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550f351ee6e8b1_52237794')) {function content_550f351ee6e8b1_52237794($_smarty_tpl) {?><html>
<head>
</head>
<body>
    <h1> Welcome to Smarty</h1>
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
        Usuarios:
        <?php  $_smarty_tpl->tpl_vars['values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['values']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['values']->key => $_smarty_tpl->tpl_vars['values']->value) {
$_smarty_tpl->tpl_vars['values']->_loop = true;
?>
            <?php echo $_smarty_tpl->tpl_vars['values']->value;?>

        <?php } ?>
        <br/>
    <?php } ?>
</body>
</html><?php }} ?>
