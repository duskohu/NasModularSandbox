<?php
/**
 * This file is part of the Nas of Nette Framework
 *
 * Copyright (c) 2013 Dusan Hudak (http://dusan-hudak.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace Nas\CmsModule\AdminModule;

use NasExt\ModularRouter\IRouterFactory;
use Nette\Application\IRouter;
use Nette\Application\Routers\Route;


/**
 * @author Dusan Hudak <admin@dusan-hudak.com>
 */
class RouterFactory implements IRouterFactory
{
	const MODULE = 'Cms:Admin';

	/** @var  string */
	private static $prefix = 'admin/cms';


	/**
	 * @return IRouter
	 */
	public function create()
	{
		$prefix = self::$prefix ? self::$prefix . '/' : '';
		return new Route($prefix . '<presenter>/<action>[/<id>]', array(
			'module' => self::MODULE,
			'presenter' => 'Homepage',
			'action' => 'default',
		));
	}


	/**
	 * @return string
	 */
	public static function getModule()
	{
		return self::MODULE;
	}


	/**
	 * @param string $prefix
	 */
	public function setPrefix($prefix)
	{
		self::$prefix = $prefix;
	}


	/**
	 * @return string
	 */
	public static function getPrefix()
	{
		return self::$prefix;
	}
}
