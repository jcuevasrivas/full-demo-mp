<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mystyle.css">
    <script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
    <script type="text/javascript" src="CHOAPI/js/index.js" defer></script>
<title>Demo completo MP</title>
</head>
<body>
<h1 align="center">Demo completo soluciones MP</h1>

<div class="row">
    <div class= "column" style="border:2px solid black;">
        <h3 align="center">CHO PRO (modal)</h3>
        <?php include 'CHOPROM/index.php' ?>
        <script
            src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
            data-preference-id="<?php echo $preference->id; ?>">
        </script>
    </div>
    <div class="column" style="border:2px solid black;">
        <h3 align="center">CHO PRO (redirect)</h3>
        <a href="<?php echo $preference->init_point;?>"> PAGAR </a>
    </div>
    <div class="column" style="border:2px solid black;">
        <h3 align="center">Wallet</h3>
        <script
            src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
            data-preference-id="<?php echo $preference2->id; ?>">
        </script>
    </div>
</div>
<div class=row>
    <div class= "column" style="border:2px solid black;">
       <div style="border:2px solid black;"><h3 align="center">CHO API (ON)</h3></div>

                <div style="padding:10px"><form action="CHOAPI/Server/PHP/server.php" method="post" id="paymentForm">
                    <h3>Detalles del comprador</h3>
                    <div>
                        <div>
                        <label for="email">E-mail</label>
                        <input id="email" name="email" type="text" value="test@testuser.com"/>
                        </div>
                    </div>
                    <h3>Detalles de la tarjeta</h3>
                    <div>
                        <div>
                        <label for="cardholderName">Titular de la tarjeta</label>
                        <input id="cardholderName" data-checkout="cardholderName" type="text">
                        </div>
                        <div>
                        <label for="">Fecha de vencimiento</label>
                        <div>
                            <input type="text" placeholder="MM" id="cardExpirationMonth" data-checkout="cardExpirationMonth"
                            onselectstart="return false" onpaste="return false"
                            oncopy="return false" oncut="return false"
                            ondrag="return false" ondrop="return false" autocomplete=off>
                            <span class="date-separator">/</span>
                            <input type="text" placeholder="YY" id="cardExpirationYear" data-checkout="cardExpirationYear"
                            onselectstart="return false" onpaste="return false"
                            oncopy="return false" oncut="return false"
                            ondrag="return false" ondrop="return false" autocomplete=off>
                        </div>
                        </div>
                        <div>
                        <label for="cardNumber">Número de la tarjeta</label>
                        <input type="text" id="cardNumber" data-checkout="cardNumber"
                            onselectstart="return false"
                            oncut="return false"
                            ondrag="return false" ondrop="return false" autocomplete=off>
                        </div>
                        <div>
                        <label for="securityCode">Código de seguridad</label>
                        <input id="securityCode" data-checkout="securityCode" type="text"
                            onselectstart="return false" onpaste="return false"
                            oncopy="return false" oncut="return false"
                            ondrag="return false" ondrop="return false" autocomplete=off>
                        </div>
                        <div id="issuerInput">
                        <label for="issuer">Banco emisor</label>
                        <select id="issuer" name="issuer" data-checkout="issuer"></select>
                        </div>
                        <div>
                        <label for="installments">Cuotas</label>
                        <select type="text" id="installments" name="installments"></select>
                        </div>
                        <div>
                        <input type="hidden" name="transactionAmount" id="transactionAmount" value="100" />
                        <input type="hidden" name="paymentMethodId" id="paymentMethodId" />
                        <input type="hidden" name="description" id="description" />
                        <br>
                        <button type="submit">Pagar</button>
                        <br>
                        </div>
                    </div>
                </form>  </div>
    </div>
    <div class="column" style="border:2px solid black;">
        <div style="border:2px solid black;"><h3 align="center">CHO API (OFF)</h3></div>
        <a href= "CHOAPIOFF/pagoxxo.php"> PAGAR en oxxo</a>
    </div>
</div>

</body>
</html>