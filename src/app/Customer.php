<?php 

class Customer
{
    private ?PaymentProfile $paymentProfile = null;

    /**
     * @return PaymentProfile|null
    */
    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentProfile;
    }

    public function createProfile()
    {
        return 1;
    }
}