<?php
    require_once '../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-3576562842320292-121421-ad042d9764058ee85cecbd1f4fbe34ec-687850535");

            $payment = new MercadoPago\Payment();
            $payment->transaction_amount = 650;
            $payment->description = $_POST['description'];
            $payment->payment_method_id = "oxxo";
            // Webhook
            $payment->notification_url = 'https://webhook.site/55e2399f-257c-48a6-b56b-74f2612af1da';
            //
            $payer = new MercadoPago\Payer();
            $payer->email = "test@testuser.com";
            $payment->payer = $payer;

            $payment->save();
            
            $URL = $payment->transaction_details->external_resource_url;
            echo $URL;

            header("Location:".$URL);

            $response = array(
                'status' => $payment->status,
                'status_detail' => $payment->status_detail,
                'id' => $payment->id,
                

            );
            echo json_encode($response);
            echo '<pre>';
            print_r($payment);
            echo '</pre>';

?>