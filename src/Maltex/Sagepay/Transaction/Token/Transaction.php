<?php namespace Maltex\Sagepay\Transaction\Server;

use Maltex\Sagepay\Transaction\TransactionInterface;

/** 
 * Sage pay Form api implementation
 *
 */
class Transaction implements TransactionInterface {
   
    /**
     * Send payment request
     * 
     */
    public function createPayment()
    {
        
    }
   
    /**
     * Generate random transaciton code
     *
     */
    public function createTransactionCode()
    {
        
    }

    /**
     * Encrypt payment data before transmission
     *
     */
    public function encryptPayment()
    {
        
    }

    /**
     * Save transaction data to database
     *
     */
    public function storeTransaction()
    {
        
    }

}