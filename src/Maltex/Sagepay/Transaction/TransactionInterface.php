<?php namespace Maltex\Sagepay\Transaction;

interface TransactionInterface {
 
    /**
     * Send payment request
     * 
     */
    public function createPayment();
      
    /**
     * Save transaction data to database
     *
     */
    public function storeTransaction();
}