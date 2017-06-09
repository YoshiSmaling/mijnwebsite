<?php
session_start();

// set global variabelen
isset($_SESSION['toegang']) ? $_SESSION['toegang'] = $_SESSION['toegang'] : $_SESSION['toegang'] = false;

include('./smarty/libs/Smarty.class.php');
include('./includes/functions.php');

// create object
$smarty = new Smarty;

// dynamische deel van de webpagina

// producten = dynamisch
$products = getProducts();
$smarty->assign("products", $products);
// $smarty->assign("showLogin", true);

$_SESSION['toegang'] = false;

// acties vanuit de index voor verdere verwerking

Dispatch();

// Laat de webshop zien  , niet zo heel veilig
isset( $_SESSION['username']) ? $userid = $_SESSION["username"]: $_SESSION['username']="gast";
$smarty->assign("userid", $_SESSION["username"]);

$smarty->display('/templates/main.tpl');

// debug login
var_dump($_GET);
var_dump($_SESSION);

?>