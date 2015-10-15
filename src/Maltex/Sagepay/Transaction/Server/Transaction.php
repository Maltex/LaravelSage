<?php namespace Maltex\Sagepay\Transaction\Server;

use Maltex\Sagepay\Customer\CustomerInterface;
use Maltex\Sagepay\Settings\Server\Settings;
use Maltex\Sagepay\Transaction\TransactionInterface;

/** 
 * Sage pay Form api implementation
 *
 */
class Transaction implements TransactionInterface {

    /**
     * Customer settings
     *
     * @var \Maltex\Sagepay\Customer\CustomerInterface $customer
     */
    private $customer;

    /**
     * Configuration settings
     *
     * @var \Maltex\Sagepay\Settings\Settings
     */
    private $settings;

    /**
     * Customer order details
     *
     * @var array
     */
    private $orderDetails;

    /**
     * Construct Customer object
     *
     * @param \Maltex\Sagepay\Settings\Settings $settings;
     * @param \Maltex\Sagepay\Customer\CustomerInterfac $customerDetails
     * @param array $orderDetails
     * @return void
     */
    public function __construct(
        Settings $settings, 
        CustomerInterface $customer,
        array $orderDetails
    )
    {
        // transaction setting from config
        $this->settings = $settings;

        // customer specific details
        $this->customer = $customer;

        // custom order details
        $this->orderDetails = $orderDetails;
    }    

    /**
     * Send payment request
     * 
     * @return array
     */
    public function createPayment()
    {
        set_time_limit(60);
        $output = array();
        $curlSession = curl_init();

        // fetch post string 
        $postString = $this->createPostString();

        // switch on live or test
        $url = $this->settings->transaction_url[$this->settings->environment];

        // Set certificate path -- spoof currently
        $caCertPath = '';

        // configure post script
        curl_setopt($curlSession, CURLOPT_URL, $url);
        curl_setopt($curlSession, CURLOPT_HEADER, 0);
        curl_setopt($curlSession, CURLOPT_POST, 1);
        curl_setopt($curlSession, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlSession, CURLOPT_TIMEOUT, 30);
        curl_setopt($curlSession, CURLOPT_SSL_VERIFYHOST, 2);

        if (!empty($caCertPath))
        {
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($curlSession, CURLOPT_CAINFO, $caCertPath);
        } 
        else
        {
            curl_setopt($curlSession, CURLOPT_SSL_VERIFYPEER, 0);
        }

        $rawResponse = curl_exec($curlSession); 

        if (curl_getinfo($curlSession, CURLINFO_HTTP_CODE) !== 200)
        {
            $output['Status'] = "FAIL";
            $output['StatusDetails'] = "Server Response: " . curl_getinfo($curlSession, CURLINFO_HTTP_CODE);
            $output['Response'] = $rawResponse;

            return $output;
        }
        if (curl_error($curlSession))
        {
            $output['Status'] = "FAIL";
            $output['StatusDetail'] = curl_error($curlSession);
            $output['Response'] = $rawResponse;
            return $output;
        }

        curl_close($curlSession);
          
        return array_merge($output, $this->responseToArray($rawResponse, "\r\n"));        
    }
   
    /**
     * Create post string for mandatory details
     *
     * @return string
     */
    private function createPostString($delimeter = '&')
    {
        $postString = '';

        // properties in settings not required
        // in post string
        $ignoreKey = array(
            'integration',
            'environment',
            'transaction_url',
            'isoCountries'
        );

        // configure all settings for post
        $settings = get_object_vars($this->settings);
        foreach($settings as $key => $item)
        {
            if(!in_array($key, $ignoreKey))
            {
                 // switch notification based on live/test
                if($key == 'NotificationURL')
                {                
                    $tempURL = $item['test'];
                    if($this->settings->environment == 'live')
                    {
                        $tempURL = $item['live'];
                    }
                    $postString .= $key . "=" . $tempURL . $delimeter;
                }
                else
                {
                    $postString .= $key . "=" . $item . $delimeter;
                }
            }           
        }

        // configure customer date for post
        $customer = get_object_vars($this->customer);
        foreach($customer as $key => $item)
        {
            $postString .= $key . "=" . $item . $delimeter;
        }

        // order details
        foreach($this->orderDetails as $key => $item)
        {
            $postString .= $key . "=" . $item . $delimeter; 
        }

        // strip trailing delimeter and return
        return substr($postString, 0, -1 * strlen($delimeter));
    }  

    /** 
     * Convert communication from sage to array
     *
     * @param string $response
     * @return array
     */
    private function responseToArray(
        $data, 
        $delimeter = "&"
    )
    {
        // explode query by delimeteriter
        $pairs = explode($delimeter, $data);
        $queryArray = array();

        // explode pairs by "="
        foreach ($pairs as $pair)
        {
            $keyValue = explode('=', $pair);

            // use first value as key
            $key = array_shift($keyValue);

            // implode others as value for $key
            $queryArray[$key] = implode('=', $keyValue);
        }
        return $queryArray;
    }

    
    /**
     * Save transaction data to database
     *
     */
    public function storeTransaction()
    {
        
    }

}