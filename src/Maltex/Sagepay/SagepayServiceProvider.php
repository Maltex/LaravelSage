<?php namespace Maltex\Sagepay;

use Illuminate\Support\ServiceProvider;
use Maltex\Sagepay\Sagepay;
use Maltex\Sagepay\Settings\SettingsInterface;
use Maltex\Sagepay\Settings\Server\Settings as SSettings;

class SagepayServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('maltex/sagepay');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	
		// register sage pay binding
		$this->app['sagepay'] = $this->app->share(function($app)
		{			
			// offered integration types
		    $integrationTypes = array(
		    	'Server',
		    	// 'From',
		    	// 'Server-Direct';
		    );

		    // check for valid integration type   			
			$integration = $this->app['config']->get('sagepay::integration_type');

			if(!in_array($integration, $integrationTypes))
			{		   
		   		throw new \InvalidArgumentException("[$integration] is not a valid selection for integration type.");
		    }
		    else
		    {
				// switch sage pay objects based on integration
				switch($integration)
				{
					case 'Server':

						// !!! we will validate all data !!!

						// take the settings under Sever seciton of the config file
						$settings = new SSettings(
							$this->app['config']->get('sagepay::environment'),							
							$integration,
							$this->app['config']->get('sagepay::transaction_url'),
							// server config specific
							$this->app['config']->get('sagepay::server.Mandatory.VPSProtocol'),
							$this->app['config']->get('sagepay::server.Mandatory.Vendor'),
							$this->app['config']->get('sagepay::server.Mandatory.Currency'),
							$this->app['config']->get('sagepay::server.Mandatory.TxType'),							
							$this->app['config']->get('sagepay::server.Mandatory.NotificationURL'),
							$this->app['config']->get('sagepay::server.Optional.ApplyAVSCV2'),
							$this->app['config']->get('sagepay::server.Optional.Apply3DSecure'),
							$this->app['config']->get('sagepay::ISOCountries')
						);

						// build Sagepay object
						return new Sagepay($settings);

						break;

					case 'Form':
						break;

					case 'Server-Direct':
						break;
				}
			}
		    
		});

		// register sage pay facade
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Sagepay', 'Maltex\Sagepay\Facades\Sagepay');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
