<?php
require('../functions.php');
require('config.php');
require('razorpay-php/Razorpay.php');


// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders

//getting order data
$query = new query();
$order_total = 0;
if (isset($_GET['order'])) {
    $order_hash = $_GET['order'];
    $order_data = $query->fetchData("orders", "*", "order_hash='$order_hash'");
    if (count($order_data) > 0) {
        $order_total =  $order_data[0]['order_total'];
    }
}
$orderData = [
    'receipt'         => 3456,
    'amount'          => $order_total * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR') {
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'manual';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true)) {
    $checkout = 'manual';
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "DJ Tiesto",
    "description"       => "Tron Legacy",
    "image"             => "https://s29.postimg.org/r6dj1g85z/daft_punk.jpg",
    "prefill"           => [
        "name"              => "Daft Punk",
        "email"             => "customer@merchant.com",
        "contact"           => "9999999999",
    ],
    "notes"             => [
        "address"           => "Hello World",
        "merchant_order_id" => $order_hash,
    ],
    "theme"             => [
        "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR') {
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
