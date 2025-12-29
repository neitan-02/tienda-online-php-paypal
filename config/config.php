<?php 

define ("CLIENT_ID", "AS1gGDTSV4E4NHsQ9XCuIhyFOuYNUOjf8eHLXf_K_I4KnGeH5B28xsgDyFLXYdjA-MEs1OFwr8tMQzi6");
define ("CURRENCY", "MXN");
define ("KEY_TOKEN", "APR.wqc-354*");
define ("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset( $_SESSION['carrito']['productos'])) {
    $num_cart = count( $_SESSION['carrito']['productos']);
}

?>