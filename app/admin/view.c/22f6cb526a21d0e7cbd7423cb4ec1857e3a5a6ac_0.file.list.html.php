<?php
/* Smarty version 3.1.29, created on 2017-08-06 21:07:23
  from "D:\amp\mvc2.com\app\admin\view\list.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5987148b05a405_99082645',
  'file_dependency' => 
  array (
    '22f6cb526a21d0e7cbd7423cb4ec1857e3a5a6ac' => 
    array (
      0 => 'D:\\amp\\mvc2.com\\app\\admin\\view\\list.html',
      1 => 1501980731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987148b05a405_99082645 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>学生信息表</h1>
        <p><a href="http://www.mvc.com/index.php?p=admin&m=student&a=insertAction">添加学生信息</a></p>
        <table border="1" rules="all" style="text-align: center">
            <tr>
                <th>序号</th>
                <th>学号</th>
                <th>姓名</th>
                <th>性别</th>
                <th>班级</th>
                <th>生源地</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_f1_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_f1_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_f1_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['number'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['class'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['belong'];?>
</td>
                <td><a href="http://www.mvc.com/index.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&p=admin&m=student&a=changeAction">修改信息</a> <a href="http://www.mvc.com/index.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&location=delete">删除信息</a></td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_f1_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
            <tr>
                <td>没有数据</td>
            </tr>
            <?php
}
if ($__foreach_f1_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_f1_0_saved_item;
}
if ($__foreach_f1_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_f1_0_saved_key;
}
?>
        </table>
        <div>
            <span><a href="">上一页</a></span>
            <span>...</span>
            <span><a href="">1</a></span>
            <span><a href="">2</a></span>
            <span><a href="">3</a></span>
            <span><a href="">4</a></span>
            <span><a href="">5</a></span>
            <span>...</span>
            <span><a href="">下一页</a></span>
        </div>
    </div>

</body>
</html><?php }
}
