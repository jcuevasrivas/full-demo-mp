<?php
    require_once '../../../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-3576562842320292-121421-ad042d9764058ee85cecbd1f4fbe34ec-687850535");

            $payment = new MercadoPago\Payment();
            $payment->transaction_amount = (float)$_POST['transactionAmount'];
            $payment->token = $_POST['token'];
            $payment->description = $_POST['description'];
            $payment->installments = (int)$_POST['installments'];
            $payment->payment_method_id = $_POST['paymentMethodId'];
            $payment->issuer_id = (int)$_POST['issuer']; //(int)$_POST['issuer'];
            // Webhook
            $payment->notification_url = 'https://webhook.site/55e2399f-257c-48a6-b56b-74f2612af1da';
            //
            $payer = new MercadoPago\Payer();
            $payer->email = $_POST['email'];
            $payment->payer = $payer;

            $payment->save();

            $response = array(
                'status' => $payment->status,
                'status_detail' => $payment->status_detail,
                'id' => $payment->id
            );
            echo json_encode($response);
            echo '<pre>';
            print_r($payment);
            echo '</pre>';

?>