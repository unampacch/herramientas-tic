<?php

namespace App\Middleware;

use DI\Container;

class BaseMiddleware
{
	protected $container;

	public function __construct(Container $container)
	{
		$this->container = $container;
	}
}
