<?php

namespace App\Modules\Auth\Controllers;

use Auth,
    Input,
    Redirect,
    View,
    Config,
    Authentication,
    Sentry,
    Cartalyst\Sentry\Users\LoginRequiredException AS LoginRequiredException,
    Cartalyst\Sentry\Users\PasswordRequiredException AS PasswordRequiredException,
    Cartalyst\Sentry\Users\WrongPasswordException AS WrongPasswordException,
    Cartalyst\Sentry\Users\UserNotFoundException AS UserNotFoundException,
    Cartalyst\Sentry\Users\UserNotActivatedException AS UserNotActivatedException,
    Cartalyst\Sentry\Users\UserSuspendedException AS UserSuspendedException,
    Cartalyst\Sentry\Users\UserBannedException AS UserBannedException;

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
        try {
            $loginField = Config::get('cartalyst/sentry::users.login_attribute');
            $passwordField = 'password';

            // Set login credentials
            $credentials = array(
                $loginField => \Input::get('email'),
                $passwordField => \Input::get('password'),
            );
            // Try to authenticate the user
            $user = Sentry::authenticate($credentials, false);
        }
        catch (LoginRequiredException $e) {
            $this->error = 'Login field is required.';
        }
        catch (PasswordRequiredException $e) {
            $this->error = 'Password field is required.';
        }
        catch (WrongPasswordException $e) {
            $this->error = 'Wrong password, try again.';
        }
        catch (UserNotFoundException $e) {
            $this->error = 'User was not found.';
        }
        catch (UserNotActivatedException $e) {
            $this->error = 'User is not activated.';
        }

// The following is only required if throttle is enabled
        catch (UserSuspendedException $e) {
            $this->error = 'User is suspended.';
        }
        catch (UserBannedException $e) {
            $this->error = 'User is banned.';
        }
        return \Redirect::to('login')->with('error', $this->error);
    }

    /**
     * Log a user out
     * @return Redirect
     */
    public function getLogout()
    {
        return Redirect::route('login');
    }

}
