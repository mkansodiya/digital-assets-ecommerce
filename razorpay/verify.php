<?php
require('../functions.php');
require('config.php');

require('razorpay-php/Razorpay.php');

use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

$query = new query();

if (empty($_POST['razorpay_payment_id']) === false) {
    $api = new Api($keyId, $keySecret);

    try {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    } catch (SignatureVerificationError $e) {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}
$html = "";
if ($success === true) {
    $user_id = $_SESSION['user_id'];
    // $html = "<p>Your payment was successful</p>
    //          <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
    $payment_id = $_POST['razorpay_payment_id'];
    $order_hash = $_POST['order_id'];
    $q = $query->updateData("orders", "order_status='completed', payment_id='$payment_id'", "order_hash='$order_hash'");
    $remove_cart = $query->dropData("cart", "user_id='$user_id'");
    header("location: ../index.php?msg=order+successful");
} else {
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}
echo $html;
