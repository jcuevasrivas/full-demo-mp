          
<?php
// SDK de Mercado Pago
require __DIR__ .  '/../vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-3228658992104014-010821-b95d24020fee09f4305bc538a76a3a49-511861525');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
$preference2 = new MercadoPago\Preference();


// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();


$preference2->items = array($item);
$preference2->purpose = "wallet_purchase";
$preference2->save();
?>