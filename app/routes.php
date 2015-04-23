<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{	
	
	$customerCredntials = array(
		'firstName'   => 'James',
		'lastName'    => 'Bennett',
		'b_address1'  => 'The Bunaglow',
		'b_address2'  => 'Higher Street',
		'b_city'      => 'Taunton',
		'b_postcode'  => 'TA36SY',
		'b_country'   => 'GB',
		'firstName'   => 'James',
		'lastName'    => 'Bennett',
		'd_address1'  => 'The Bunaglow',
		'd_address2'  => 'Higher Street',
		'd_city'      => 'Taunton',
		'd_postcode'  => 'TA36SY',
		'd_country'   => 'GB'
	);

	$orderDetails = array(
		'VendorTxCode' => "09873636366234asdas7",
		'Amount'      => 0.01,
		'Description' => "You will work now"
	);

	Sagepay::preparePayment(
		$orderDetails,
		$customerCredntials,
		$token = null
	);	

	$paymentResponse = Sagepay::sendPayment();	
	if(isset($paymentResponse['Status']) && $paymentResponse['Status'] == 'OK')
	{			
		// store transactions data


		// relocate the user to sage payment gateway		
		return Redirect::to($paymentResponse['NextURL']);					
	}
	else
	{
		// switch on status for error codes
		
	}

});

Route::post('/success', function()
{
	echo "Tran success";
});