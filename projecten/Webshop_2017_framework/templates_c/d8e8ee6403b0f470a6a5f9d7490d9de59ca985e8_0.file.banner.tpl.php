<?php
/* Smarty version 3.1.29, created on 2017-03-14 13:55:00
  from "C:\wamp\www\Webshop_2017_framework\templates\banner.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c7e8245b6af3_94423743',
  'file_dependency' => 
  array (
    'd8e8ee6403b0f470a6a5f9d7490d9de59ca985e8' => 
    array (
      0 => 'C:\\wamp\\www\\Webshop_2017_framework\\templates\\banner.tpl',
      1 => 1489496099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/templates/login.tpl' => 1,
  ),
),false)) {
function content_58c7e8245b6af3_94423743 ($_smarty_tpl) {
?>
<div class="jumbotron">
  <h1>Zadkine</h1> 
  <p>We specialize in blablabla</p>
  <form class="form-inline">
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Subscribe</button>
  </form>

  <?php if ($_smarty_tpl->tpl_vars['showLogin']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



  <?php }?>

</div><?php }
}
