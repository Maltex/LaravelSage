<?php namespace Maltex\Sagepay\Token;

use Maltex\Sagepay\Token\TokenInterface;

class Token implements TokenInterface {
	
	/**
	 * Register the token with sage
	 *
	 * @param array $tokenDate
	 */
	public function registerToken(array $tokenData)
	{

	}

	/**
	 * Store the database in a local data store
	 *
	 * @param array $tokenData
	 */
	public function storeToken(array $tokenData)
	{
		
	}

}