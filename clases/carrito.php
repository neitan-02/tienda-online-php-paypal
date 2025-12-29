<?php

require '../config/config.php';

header('Content-Type: application/json');

$datos = [
    'ok' => false,
    'numero' => 0
];

if (isset($_POST['id'], $_POST['token'])) {

    $id = $_POST['id'];
    $token = $_POST['token'];

    if ($token === hash_hmac('sha1', $id, KEY_TOKEN)) {

        if (!isset($_SESSION['carrito']['productos'])) {
            $_SESSION['carrito']['productos'] = [];
        }

        if (isset($_SESSION['carrito']['productos'][$id])) {
            $_SESSION['carrito']['productos'][$id]++;
        } else {
            $_SESSION['carrito']['productos'][$id] = 1;
        }

        $datos['numero'] = array_sum($_SESSION['carrito']['productos']);
        $datos['ok'] = true;
    }
}

echo json_encode($datos);
