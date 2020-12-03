<?php
    require "vendor/autoload.php";
    $gateway = new Braintree\Gateway([
        'environment' => 'sandbox',
        'merchantId' => "5v9rn2rsqwfhxgcp",
        'publicKey' => "fyknhvx68gsskwtx",
        'privateKey' => "4b417920726dd4cc30a0727406ca0800"
    ]);
?>