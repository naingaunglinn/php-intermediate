<?php

require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/DateTime.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../Notification/Email.php';

use PaymentGateWay\Paddle\Transaction;

var_dump(new Transaction());