<?php namespace Maltex\Sagepay\Customer;

use Maltex\Sagepay\Customer\CustomerInterface;

/** 
 * Customer data for Server api
 *
 */
class Customer implements CustomerInterface {

	/**
	 * Customer first name
	 *
	 * @var string
	 */
	public $BillingFirstnames;

	/**
	 * Customer last name
	 *
	 * @var string
	 */
	public $BillingSurname;

	/**
     * The first address line for billing address
     *
     * @var string
     */
    public $BillingAddress1;

    /**
     * The second address line for billing address
     *
     * @var string
     */
    public $BillingAddress2;
    
    /**
     * The billing city of the customer
     *
     * @var string
     */
    public $BillingCity;

    /**
     * The billing postcode of the customer
     *
     * @var string
     */
    public $BillingPostcode;

    /**
     * The billing country of the address
     *
     * @var $country
     */
    public $BillingCountry;

    /**
     * Customer first name
     *
     * @var string
     */
    public $DeliveryFirstnames;

    /**
     * Customer last name
     *
     * @var string
     */
    public $DeliverySurname;
	
    /**
     * The first address line for dispatch address
     *
     * @var string
     */
    public $DeliveryAddress1;

    /**
     * The second address line for dispatch address
     *
     * @var string
     */
    public $DeliveryAddress2;
    
    /**
     * The dispatch city of the customer
     *
     * @var string
     */
    public $DeliveryCity;

    /**
     * The dispatch postcode of the customer
     *
     * @var string
     */
    public $DeliveryPostcode;

    /**
     * The dispatch country of the address
     *
     * @var $country
     */
    public $DeliveryCountry;

	/**
	 * Construct Customer object
	 *
	 * @param array $details
	 * @return void
	 */
	public function __construct($details)
	{
		$this->BillingFirstnames  = $details['firstName'];
        $this->BillingSurname     = $details['lastName'];
        $this->BillingAddress1    = $details['bAddress1'];
        $this->BillingAddress2    = $details['bAddress2'];
        $this->BillingCity        = $details['bCity'];
        $this->BillingPostcode    = $details['bPostcode'];
        $this->BillingCountry     = $details['bCountry'];
        $this->DeliveryFirstnames = $details['firstName'];
        $this->DeliverySurname    = $details['lastName'];
        $this->DeliveryAddress1   = $details['dAddress1'];
        $this->DeliveryAddress2   = $details['dAddress2'];
        $this->DeliveryCity       = $details['dCity'];
        $this->DeliveryPostcode   = $details['dPostcode'];
        $this->DeliveryCountry    = $details['dCountry'];
	}    
}