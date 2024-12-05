<?php

require_once '../Transaction.php';
require_once '../Customer.php';

$transaction = new Transaction(5, 'test');

echo $transaction?->customer?->paymentProfile?->id; 