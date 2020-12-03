
	
<?php
require_once("boot.php");

$amount = $_POST["amount"];
$nonce = $_POST["payment_method_nonce"];

$result = $gateway->transaction()->sale([
    'amount' => $amount,
    'paymentMethodNonce' => $nonce,
    'options' => [
        'submitForSettlement' => true
    ]
]);

if ($result->success || !is_null($result->transaction)) {
    $transaction = $result->transaction;
    if (isset($transaction)) {
        $transaction = $gateway->transaction()->find($transaction->id);

        $transactionSuccessStatuses = [
            Braintree\Transaction::AUTHORIZED,
            Braintree\Transaction::AUTHORIZING,
            Braintree\Transaction::SETTLED,
            Braintree\Transaction::SETTLING,
            Braintree\Transaction::SETTLEMENT_CONFIRMED,
            Braintree\Transaction::SETTLEMENT_PENDING,
            Braintree\Transaction::SUBMITTED_FOR_SETTLEMENT
        ];

        if (in_array($transaction->status, $transactionSuccessStatuses)) {
            $header = "Sweet Success!";
            $icon = "success";
            // $message = "Your test transaction has been successfully processed. See the Braintree API response and try again.";
        } else {
            $header = "Transaction Failed";
            $icon = "fail";
            // $message = "Your test transaction has a status of " . $transaction->status . ". See the Braintree API response and try again.";
        }
    }
} else {
    $errorString = "";

    foreach($result->errors->deepAll() as $error) {
        $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
    }

    // $_SESSION["errors"] = $errorString;
    // header("Location: " . $baseUrl . "index.php");
    $message = $errorString;
}