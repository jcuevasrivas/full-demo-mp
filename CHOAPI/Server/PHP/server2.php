<?php
    require_once '../../../vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("APP_USR-7022517605856097-021221-2ebfe9b116e2c3869b25c1aba37a6871-714774047");

            $payment = new MercadoPago\Payment();
            $payment->transaction_amount = (float)$_POST['transactionAmount'];
            $payment->token = $_POST['token'];
            $payment->description = $_POST['description'];
            $payment->installments = (int)$_POST['installments'];
            $payment->payment_method_id = $_POST['paymentMethodId'];
            $payment->issuer_id = (int)$_POST['issuer'];
            // Webhook
            $payment->notification_url = 'https://webhook.site/55e2399f-257c-48a6-b56b-74f2612af1da';
            //
            $payer = new MercadoPago\Payer();
            $payer->email = $_POST['email'];
            $payment->payer = $payer;
            
            // Captura de pago 
            $payment->capture=false; // Esto es para autorización y captura
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
