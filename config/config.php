<?php 

define ("CLIENT_ID", "AS1gGDTSV4E4NHsQ9XCuIhyFOuYNUOjf8eHLXf_K_I4KnGeH5B28xsgDyFLXYdjA-MEs1OFwr8tMQzi6");
define ("TOKEN_MP", "TEST-3474067657275157-123104-2db723135a13fd454f1a7ecc8942a838-1501154808");
define("PUBLIC_KEY_MP", "TEST-e2f5be56-4908-41ea-8198-19545095657b");
define ("CURRENCY", "MXN");
define ("KEY_TOKEN", "APR.wqc-354*");
define ("MONEDA", "$");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>