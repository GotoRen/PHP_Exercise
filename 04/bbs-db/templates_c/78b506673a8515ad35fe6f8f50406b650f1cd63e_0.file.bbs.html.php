<?php
/* Smarty version 3.1.33, created on 2020-10-17 03:40:26
  from '/Applications/XAMPP/xamppfiles/htdocs/WebProg_Exercise/04/bbs-db/templates/bbs.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f89e91a8398c5_12426921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78b506673a8515ad35fe6f8f50406b650f1cd63e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/WebProg_Exercise/04/bbs-db/templates/bbs.html',
      1 => 1602873401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f89e91a8398c5_12426921 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/WebProg_Exercise/04/bbs-db/smarty/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>サクッと掲示板（DB版）</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>サクッと掲示板（DB版）</h1>

        <?php if ($_smarty_tpl->tpl_vars['error_message']->value) {?>
        <ul class="error-message">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error_message']->value, 'message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
?>
                <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    <?php }?>

    <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post">
        <table>
            <tr>
                <th>投稿者名</th>
                <td><input type="text" name="name" size="30"></td>
            </tr>
            <tr>
                <th>タイトル</th>
                <td><input type="text" name="title" size="50"></td>
            </tr>
            <tr>
                <th>本文</th>
                <td colspan="2"><textarea name="body" cols="50 rows="5"></textarea></td>
            </tr>
        </table>
        <input name="save" type="submit" value="投稿する">
    </form>

    <hr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bbs_list']->value, 'bbs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bbs']->value) {
?>
        <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bbs']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
        <p><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['bbs']->value['date'],"%Y年%m月%e日 %H:%M:%S"), ENT_QUOTES, 'UTF-8', true);?>
 / 投稿者：<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bbs']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</strong></p>
        <p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['bbs']->value['body'], ENT_QUOTES, 'UTF-8', true));?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
