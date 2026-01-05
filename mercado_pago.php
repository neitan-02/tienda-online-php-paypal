<?php
require __DIR__ . '/vendor/autoload.php';

use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;


MercadoPagoConfig::setAccessToken('Acces_Token');

$client = new PreferenceClient();

$preference = $client->create([
    "items" => [
        [
            "id" => "DEP-0001",
            "title" => "Balón de futbol",
            "quantity" => 1,
            "unit_price" => 150.00,
            "currency_id" => "MXN"
        ]
    ],
        /* se qued pendiente ya que son peticiones por https
        "back_urls" => [
            "success" => "http://localhost/Tienda_online/captura.php",
            "failure" => "http://localhost/Tienda_online/fallo.php",
            "pending" => "http://localhost/Tienda_online/captura.php"
        ],
        "auto_return" => "approved"
        */
]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Checkout Mercado Pago</title>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>

<h3>Pagar con Mercado Pago</h3>

<div id="walletBrick_container"></div>

<script>
const mp = new MercadoPago('Your Public Key', {
    locale: 'es-MX'
});

const bricksBuilder = mp.bricks();

bricksBuilder.create("wallet", "walletBrick_container", {
    initialization: {
        preferenceId: "<?php echo $preference->id; ?>"
    }
});
</script>

</body>
</html>