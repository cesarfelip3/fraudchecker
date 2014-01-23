<?php

namespace App\Modules\Auth\Controllers;

use Auth,
    Input,
    Redirect,
    View,
    Config,
    Cartalyst\Sentry\Sentry,
    Authentication,
    Session;

/**
 * Authentication controller
 * @author Boris Strahija <bstrahija@gmail.com>
 */
class AuthController extends \BaseController
{

    protected $error;

    /**
     * Display login screen
     * @return View
     */
    public function getLogin()
    {
        return View::make('auth::login');
    }

    /**
     * Attempt to login
     * @return Redirect
     */
    public function postLogin()
    {
        $loginField = Config::get('cartalyst/sentry::users.login_attribute');
        $passwordField = 'password';

        // Set login credentials
        $credentials = array(
            $loginField => \Input::get('email'),
            $passwordField => \Input::get('password'),
        );
        // Try to authenticate the user
        if ($user = Authentication::authenticate($credentials, true)) {
            return \Redirect::to('admin/dashboard')->with('success', 'Welcome to dashboard.');
        }
        return \Redirect::route('admin.login')->with('error', Authentication::getError());
    }

    /**
     * Log a user out
     * @return Redirect
     */
    public function getLogout()
    {
        Session::flush();
        return Redirect::to('admin/login');
    }

}
