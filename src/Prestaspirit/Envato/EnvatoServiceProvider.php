<?php namespace Prestaspirit\Envato;

/**
 * Part of the Envato package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Envato
 * @version    1.0.0
 * @author     Prestaspirit
 * @license    BSD License (3-clause)
 * @copyright  (c) 2009 - 2014, Prestaspirit
 * @link       http://www.prestaspirit.fr
 */

use Illuminate\Support\ServiceProvider;

class EnvatoServiceProvider extends ServiceProvider {

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
		$this->package('prestaspirit/envato', 'prestaspirit/envato');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('envato', function($app)
		{
			// echo '<pre>'.print_r($app, true).'</pre>';die;
			return new Envato();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('envato');
	}

}
