<?php

require __DIR__ . '/vendor/autoload.php';

use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;


// Token de prueba
MercadoPagoConfig::setAccessToken('TEST_ACCESS_TOKEN');

// Crear preferencia
$client = new PreferenceClient();

$preference = $client->create([
    "items" => [
        [
            "id" => "DEP-0001",
            "title" => "Balon de futbol",
            "quantity" => 1,
            "unit_price" => 150.00,
            "currency_id" => "MXN"
        ]
        ], 

        "statement_descriptor" => "Mi tienda cdp",
        "external_reference" => "CDP001"
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Integración con Checkout Pro</title>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>
<body>
    <h3>Mercado Pago</h3>

    <div id="walletBrick_container"></div>

    <script>
        cont = mp = new MercadoPago('publicKey',{
            locale: 'es-MX'
        });

          const bricksBuilder = mp.bricks();
  const renderWalletBrick = async (bricksBuilder) => {
    await bricksBuilder.create("wallet", "walletBrick_container", {
      initialization: {
        preferenceId: "<?php echo $preference->id; ?>",
      }
});
  };

  renderWalletBrick(bricksBuilder);
    </script>
</body>
</html>