<?php namespace Spinegar\LaravelSugar;

use Illuminate\Support\ServiceProvider;
use Config;

class Sugar6ServiceProvider extends ServiceProvider {

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
		$this->package('spinegar/laravelsugar');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	    $this->app->singleton('sugar', function()
       	    {
		$sugar = new \Asakusuma\SugarWrapper\Rest;

		$sugar->setUrl(Config::get('laravelsugar::url'));
		$sugar->setUsername(Config::get('laravelsugar::username'));
		$sugar->setPassword(Config::get('laravelsugar::password'));

		$sugar->connect();

		return $sugar;
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
