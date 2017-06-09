<?php
/* Smarty version 3.1.29, created on 2017-04-20 17:48:25
  from "C:\wamp\www\mijnwebsite3\projecten\Webshop_2017_framework\templates\navigator_top.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58f8d84995b3e5_22625854',
  'file_dependency' => 
  array (
    '1ac98a430e51f7758909dc166e81e65a68b1ab5a' => 
    array (
      0 => 'C:\\wamp\\www\\mijnwebsite3\\projecten\\Webshop_2017_framework\\templates\\navigator_top.tpl',
      1 => 1483996374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f8d84995b3e5_22625854 ($_smarty_tpl) {
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
