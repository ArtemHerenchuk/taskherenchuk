<?php
/* Smarty version 3.1.29, created on 2016-11-19 21:29:45
  from "C:\OpenServer\domains\SamsonOS\views\default\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58309a19175fb7_02402998',
  'file_dependency' => 
  array (
    '5585dbbd7c4ef7aafa0bd32b26f641ddf34dcae3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\SamsonOS\\views\\default\\index.tpl',
      1 => 1479580179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58309a19175fb7_02402998 ($_smarty_tpl) {
?>







    <?php
$_from = $_smarty_tpl->tpl_vars['rsPictures']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_pictures_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_pictures']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] : false;
$__foreach_pictures_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration']++;
$__foreach_pictures_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
			<div style = "float: left; padding: 0px 30px 40px 0px;">
				<a href="/pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
/">
					<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image_name'];?>
" width="200" height="200" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />
				</a><br />
				<a href="pictures/<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
/" id="openPicture" onclick="openPicture(<?php echo $_smarty_tpl->tpl_vars['item']->value['ID'];?>
); return false"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
			</div>
	    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pictures']->value['iteration'] : null) % 5 == 0) {?>
	    	<div style="clear: both;"></div>
	    <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_pictures_0_saved_local_item;
}
if ($__foreach_pictures_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_pictures'] = $__foreach_pictures_0_saved;
}
if ($__foreach_pictures_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_pictures_0_saved_item;
}
?>



	
<?php }
}
