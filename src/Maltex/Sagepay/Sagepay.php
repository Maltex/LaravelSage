<?php namespace Maltex\Sagepay;

use \Illuminate\Support\Collection;
use Maltex\Sagepay\Customer\CustomerInterface;
use Maltex\Sagepay\Customer\Customer;
use Maltex\Sagepay\Settings\SettingsInterface;
use Maltex\Sagepay\Settings\Server\Settings as SSettings;
use Maltex\Sagepay\Token\TokenInterface;
use Maltex\Sagepay\Token\Token;
use Maltex\Sagepay\Transaction\TransactionInterface;
use Maltex\Sagepay\Transaction\Server\Transaction as STransaction;
use Maltex\Sagepay\Transaction\Token\Transaction as TTransaction;

class Sagepay {
	
	/**
	 * Settings for conifguring Sage pay  
	 *
	 * @var \Maltex\Sagepay\Settings\SettingsInterface
	 */
	public $settings;
	
	/**
	 * Transaction object  
	 *
	 * @var \Maltex\Sagepay\Transaction\TransactionInterface
	 */
	protected $transaction;

	/**
	 * Create Sagepay object
	 *
	 * @param \Maltex\Sagepay\Settings\SettingsInterface $settings
	 * @return void
	 */
	public function __construct(SettingsInterface $settings)
	{
		$this->settings = $settings;
	}

	/**
	 * Return the vendor name
	 *
	 * @return \Maltex\Sagepay\Settings\SettingsInterface
	 */
	public function getSettings()
	{
		return $this->settings;
	}
		
	/**
	 * Set transaction object
	 *
	 * @param \Maltex\Sagepay\Transaction\TransactionInterface $transaction
	 * @return void
	 */
	private function setTransaction($transaction)
	{	
        $this->transaction = $transaction;
	}

	/**
	 * Prepare payment
	 *
	 */
	public function preparePayment(
		$orderDetails,
		$customerDetails,
		$tokenDetails = null
	)
	{
		// create customer object
		$customer = new Customer($customerDetails);

		// check for token transaction 
		$integrationType = is_null($tokenDetails) ? $this->settings->integration : 'Token';
	
		// create sagepay object based on integration type
		switch($integrationType)
		{
			case 'Server':
			
				// set server transaction object
				$this->setTransaction(new STransaction(
					$this->settings,
					$customer,
					$orderDetails
				));

				break;

			case 'Token':

				$this->setTransaction(new TTransaction(
					$this->settings,
					$customer,
					$tokenDetails
				));

				break;
		}
	}

	/**
	 * Make payment
	 *
	 */
	public function sendPayment()
	{
		// create transaction requests to sage
		return $this->transaction->createPayment();
	}

}