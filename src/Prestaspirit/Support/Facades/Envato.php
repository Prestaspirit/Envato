<?php namespace Prestaspirit\Support\Facades;

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

use Illuminate\Support\Facades\Facade;

class Envato extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'envato'; }

}