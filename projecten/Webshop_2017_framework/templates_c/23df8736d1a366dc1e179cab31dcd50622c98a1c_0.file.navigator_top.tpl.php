<?php
/* Smarty version 3.1.29, created on 2017-02-21 13:55:16
  from "C:\wamp\www\Webshop_2017_framework\templates\navigator_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac38b4bbed22_12739645',
  'file_dependency' => 
  array (
    '23df8736d1a366dc1e179cab31dcd50622c98a1c' => 
    array (
      0 => 'C:\\wamp\\www\\Webshop_2017_framework\\templates\\navigator_top.tpl',
      1 => 1483996374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac38b4bbed22_12739645 ($_smarty_tpl) {
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Logo</a>
      
     </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#prijzen">PRIJZEN</a></li>
        <li><a href="./includes/bestelOverzicht.php">BESTELLINGEN</a></li>
        <li><a href="#PRODUCTS">PRODUCTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
     </div>
  </div>
</nav>
<?php }
}
