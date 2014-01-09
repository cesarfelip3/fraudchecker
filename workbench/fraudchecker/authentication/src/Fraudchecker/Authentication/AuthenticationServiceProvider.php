<?php

namespace Fraudchecker\Authentication;

use Illuminate\Support\ServiceProvider;
use Fraudchecker\Authentication\AuthenticationService as Authentication;

class AuthenticationServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('authentication', function($app) {
            return new Authentication($app->make('sentry'));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('authentication');
    }

}
