<?php namespace Maltex\Sagepay\Settings\Server;

use Maltex\Sagepay\Settings\SettingsInterface;

class Settings implements SettingsInterface {

	/**
     * Environment to perform transactions with
     *
     * Options: 'Live', 'Test'
     *
     * @var string 
     */
    public $environment;

    /**
     * Integration type for this transactions
     *
     * @var string
     */
    public $integration;   

    /**
     * URL for the Sage pay API
     *
     * @var array
     */
    public $transaction_url;

    /**
     * Sage API version 
     *
     * @var string
     */
    public $VPSProtocol;

    /**
     *  Vendor name of merchant
     *
     * @var string
     */
    public $Vendor;

    /**
     *  Currency being used for transactions
     *
     * @var string
     */
    public $Currency;

    /**
     *  Type of transaction taking place
     *
     * @var string
     */
    public $TXType;

    /**
     * Notification URLS
     *
     * @var array
     */
    public $NotificationURL;

    /**
     *  Flags for managing address and card verification
     *
     * @var int
     */
    public $ApplyAVSCV2;

    /**
     *  Flag for 3d secure payments
     *
     * @var string
     */
    public $Apply3DSecure;

    /**
     * List of all accepted ISO Countries
     *
     * @var array
     */
    public $isoCountries;  
   
    /**
     * Create Settings object
     *
     */
    public function __construct(
        $environment,
        $integration,
        $transaction_url,
        $VPSProtocol,
        $Vendor,
        $Currency,
        $TXType,
        $NotificationURL,
        $ApplyAVSCV2,
        $Apply3DSecure,
        $isoCountries
    )
    {
        $this->environment     = $environment;
        $this->integration     = $integration;
        $this->transaction_url = $transaction_url;

        // the variables below will be used in the transactions with sage
        $this->VPSProtocol     = $VPSProtocol;
        $this->Vendor          = $Vendor;
        $this->Currency        = $Currency;
        $this->TXType          = $TXType;
        $this->NotificationURL = $NotificationURL;
        $this->ApplyAVSCV2     = $ApplyAVSCV2;
        $this->Apply3DSecure   = $Apply3DSecure;
        $this->isoCountries    = $isoCountries;
    }

}