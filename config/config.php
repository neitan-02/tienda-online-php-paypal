<?php 

define ("CLIENT_ID", "Client ID");
define ("TOKEN_MP", "ACCES_TOKEN");
define("PUBLIC_KEY_MP", "YOUR_PUBLIC_KEY");
define ("CURRENCY", "MXN");
define ("KEY_TOKEN", "APR.wqc-354*");
define ("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset( $_SESSION['carrito']['productos'])) {
    $num_cart = count( $_SESSION['carrito']['productos']);
}

?>