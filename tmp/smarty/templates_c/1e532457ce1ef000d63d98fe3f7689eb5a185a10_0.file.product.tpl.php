<?php
/* Smarty version 3.1.29, created on 2016-11-19 23:36:17
  from "C:\OpenServer\domains\SamsonOS\views\default\product.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5830b7c1547878_64272232',
  'file_dependency' => 
  array (
    '1e532457ce1ef000d63d98fe3f7689eb5a185a10' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\product.tpl',
      1 => 1479587746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5830b7c1547878_64272232 ($_smarty_tpl) {
?>
    
    <html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo TemplateWebPath;?>
css/main.css" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-1.12.3.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
    </head>

    <body>
        <div id="picturePage">
            <h3><?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['name'];?>
</h3>
            <h3>Дата загрузки: <?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['datetime'];?>
</h3>
            <form action="/download/update/" method="post">
                <textarea name="description" maxlength="200" placeholder="<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['description'];?>
"></textarea></br></br>
                <input type="submit"  value="Обновить комментарий">
            </form>
            <img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsPicture']->value['image_name'];?>
">
        </div>
    </body>

<?php }
}
