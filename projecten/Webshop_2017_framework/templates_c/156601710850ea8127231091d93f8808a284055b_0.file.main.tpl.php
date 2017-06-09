<?php
/* Smarty version 3.1.29, created on 2017-04-20 17:48:25
  from "C:\wamp\www\mijnwebsite3\projecten\Webshop_2017_framework\templates\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f8d849796958_94869927',
  'file_dependency' => 
  array (
    '156601710850ea8127231091d93f8808a284055b' => 
    array (
      0 => 'C:\\wamp\\www\\mijnwebsite3\\projecten\\Webshop_2017_framework\\templates\\main.tpl',
      1 => 1484073645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
    'file:/templates/banner.tpl' => 1,
    'file:/templates/products.tpl' => 1,
    'file:/templates/about.tpl' => 1,
    'file:/templates/services.tpl' => 1,
    'file:/templates/prijzen.tpl' => 1,
    'file:/templates/contact.tpl' => 1,
    'file:/templates/navigator_top.tpl' => 1,
    'file:/templates/footer.tpl' => 1,
  ),
),false)) {
function content_58f8d849796958_94869927 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Webshop",'username'=>'bezoeker'), 0, false);
?>
 
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

Bakker 2016

-->


<body id="Webshop" data-spy="scroll" data-target=".navbar" data-offset="60">
  
    
<!-- Banner -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/banner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Producten -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
<!-- About sectie -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/about.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Services -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/services.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Prijzen of tarieven -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/prijzen.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- contact -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- navigatie menu-balk -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/navigator_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- footer -->
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
</body>

</html><?php }
}
