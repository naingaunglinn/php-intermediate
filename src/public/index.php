<?php

require_once '../Transaction.php';

// Classes & Objects
$transaction = (new Transaction(100, 'Transaction 1'))
                ->addTax(8)
                ->applyDsicount(10);

$amount = $transaction->getAmount();

unset($transaction);

var_dump($amount);