<?php

use Cartalyst\Sentry\Sentry;

class TestController extends BaseController
{
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function testAuthenticateAction()
    {
        $loginField = Config::get('cartalyst/sentry::users.login_attribute');
        $passwordField = 'password';
        $credentials = array(
            $loginField => 'user@user.com',
            $passwordField => 'sentryuser11'
        );
        if (!$user = Authentication::authenticate($credentials, false)) {
            //echo Authentication::getError();
        }
        else {
            echo 'success';
        }
    }

}
