<?php
/* Smarty version 3.1.29, created on 2017-04-20 17:48:25
  from "C:\wamp\www\mijnwebsite3\projecten\Webshop_2017_framework\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f8d84986ce30_88851737',
  'file_dependency' => 
  array (
    '3f6afbc93627efb0be9a7a8a99af0c1b8e52c25b' => 
    array (
      0 => 'C:\\wamp\\www\\mijnwebsite3\\projecten\\Webshop_2017_framework\\templates\\footer.tpl',
      1 => 1459804246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f8d84986ce30_88851737 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\mijnwebsite3\\projecten\\Webshop_2017_framework\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
    User Information:

Name: Zadkine <br>
Addr: ROC Hogeschool <br>
Date: <?php echo smarty_modifier_date_format(time(),"%b %e, %Y");?>
 <br>
  <p>Roc Zadkine <a href="https://www.deheldenvantechniek.nl/" title="Helden van techniek">https://www.deheldenvantechniek.nl/</a></p> 
</footer>

<?php }
}
