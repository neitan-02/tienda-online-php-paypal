<?php 

//Configuracion del sistema
define("SITE_URL", "http://localhost/Tienda_online/");
define ("KEY_TOKEN", "KEY_TOKEN");
define ("MONEDA", "$");

//Configuracion de Pay Pal
define ("CLIENT_ID", "CLIENT_ID");
define ("CURRENCY", "MXN");

//Configuracion de Mercado
define ("TOKEN_MP", "ACCES_TOKEN");
define("PUBLIC_KEY_MP", "YOUR_PUBLIC_KEY");
define("LOCALE_MP", "es-MX");

//Datos para envio de correo electronico 
define("MAIL_HOST", "MAIL_HOST");
define("MAIL_USER", "correo electronico");
define("MAIL_PASS", "contraseña de gogle en caso de usar");
define("MAIL_PORT", "465");


session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])) {
    $num_cart = count($_SESSION['carrito']['productos']);
}

?>