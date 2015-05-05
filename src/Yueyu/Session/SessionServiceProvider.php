<?php

namespace Yueyu\Session;

use Illuminate\Session\SessionServiceProvider as ServiceProvider;

class SessionServiceProvider extends ServiceProvider {

	/**
	 * Register the session manager instance.
	 *
	 * @return void
	 */
	protected function registerSessionManager()
	{
		$this->app->bindShared('session', function($app)
		{
			return new SessionManager($app);
		});
	}

}
