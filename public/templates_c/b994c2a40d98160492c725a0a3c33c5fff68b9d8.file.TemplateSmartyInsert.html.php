<?php /* Smarty version Smarty-3.1.20, created on 2015-03-22 21:33:16
         compiled from "../src/Templates/TemplateSmartyInsert.html" */ ?>
<?php /*%%SmartyHeaderCode:930850964550f351c247905-39205095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b994c2a40d98160492c725a0a3c33c5fff68b9d8' => 
    array (
      0 => '../src/Templates/TemplateSmartyInsert.html',
      1 => 1427053876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930850964550f351c247905-39205095',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_550f351c29fd45_48950297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550f351c29fd45_48950297')) {function content_550f351c29fd45_48950297($_smarty_tpl) {?><html>
<title></title>
<body>
    <table border="0" cellspacing="10">
        <tr>
            <td>
                <form action="/agregarUsuariosSmarty/agregar" name="agregar" method="post">
                    <fieldset>
                        <b>DNI:</b> <input type="number" name="dni" /><br/>
                        <b>Nombre:</b> <input type="text" name="nombre" /><br/>
                        <b>Apellido:</b> <input type="text" name="apellido" /><br/>
                        <input type="submit" value="Agregar" />
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html><?php }} ?>
