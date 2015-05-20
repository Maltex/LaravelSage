<?php namespace Maltex\Sagepay\Facades;

use Illuminate\Support\Facades\Facade;

class Sagepay extends Facade {

	/**
	* Get the registered name of the component.
	*
	* @return string
	*/
  	protected static function getFacadeAccessor() { return 'sagepay'; }
}