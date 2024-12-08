<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/DateTime.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../Notification/Email.php';

use PaymentGateWay\Paddle\{Transaction, CustomerProfile};
use PaymentGateWay\Stripe\Transaction as StripeTransaction;;

$paddleTransaction = new Transaction();
$striptTransaction = new StripeTransaction(); 
$paddleCustomerProfile = new CustomerProfile();

include('views/layout.php');