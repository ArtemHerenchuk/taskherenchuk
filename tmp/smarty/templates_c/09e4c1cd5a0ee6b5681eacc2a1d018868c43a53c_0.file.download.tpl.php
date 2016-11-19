<?php
/* Smarty version 3.1.29, created on 2016-11-19 21:29:44
  from "C:\OpenServer\domains\SamsonOS\views\default\download.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58309a18e81cb7_92580955',
  'file_dependency' => 
  array (
    '09e4c1cd5a0ee6b5681eacc2a1d018868c43a53c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\download.tpl',
      1 => 1479580148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58309a18e81cb7_92580955 ($_smarty_tpl) {
?>

<div id="load">
    <h3>Загрузить картинку</h3>
    <form enctype="multipart/form-data" action="/download/download/" method="post">
        <input type="text" name="text" value="" placeholder="Название картинки" required></br>
        <textarea name="description" maxlength = 200 placeholder="Описание картинки"></textarea></br>
        <input type="file" name="filename" required></br>
        <input type="submit"  value="Загрузить">
    </form>
</div>

<div id="CenterColumn">
<?php }
}
