<?php namespace Maltex\Sagepay\Token;

interface TokenInterface {
	
	/**
	 * Register the token
	 *
	 * @param array $tokenData
	 */
	public function registerToken(array $tokenData);

	/**
	 * Store token against data store
	 *
	 * @param array $tokenData
	 */
	public function storeToken(array $tokenData);

}