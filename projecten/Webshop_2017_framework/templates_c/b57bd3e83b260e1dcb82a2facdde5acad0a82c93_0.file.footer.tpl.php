<?php
/* Smarty version 3.1.29, created on 2017-02-21 13:55:16
  from "C:\wamp\www\Webshop_2017_framework\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac38b4bd4cd7_91023397',
  'file_dependency' => 
  array (
    'b57bd3e83b260e1dcb82a2facdde5acad0a82c93' => 
    array (
      0 => 'C:\\wamp\\www\\Webshop_2017_framework\\templates\\footer.tpl',
      1 => 1459804246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac38b4bd4cd7_91023397 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\wamp\\www\\Webshop_2017_framework\\smarty\\libs\\plugins\\modifier.date_format.php';
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
