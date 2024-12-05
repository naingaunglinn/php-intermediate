<?php
declare(strict_types= 1);

class Transaction
{    
    private ?Customer $customer = null;
    public function __construct(
        private float $amount, 
        private string $description
    ){
        
    }
    
    /**
     * @return Customer|null 
    */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
}