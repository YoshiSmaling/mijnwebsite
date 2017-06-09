<?php
/* Smarty version 3.1.29, created on 2017-04-20 17:48:25
  from "C:\wamp\www\mijnwebsite3\projecten\Webshop_2017_framework\templates\banner.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f8d8498322d7_53956814',
  'file_dependency' => 
  array (
    '1dd00a6c4345791b2ddfa7a69ad2c13b9d3c1dd3' => 
    array (
      0 => 'C:\\wamp\\www\\mijnwebsite3\\projecten\\Webshop_2017_framework\\templates\\banner.tpl',
      1 => 1489496099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/templates/login.tpl' => 1,
  ),
),false)) {
function content_58f8d8498322d7_53956814 ($_smarty_tpl) {
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
