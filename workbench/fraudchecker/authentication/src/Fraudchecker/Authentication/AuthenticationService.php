<?php

namespace Fraudchecker\Authentication;

use Cartalyst\Sentry\Sentry,
    Cartalyst\Sentry\Users\LoginRequiredException AS LoginRequiredException,
    Cartalyst\Sentry\Users\PasswordRequiredException AS PasswordRequiredException,
    Cartalyst\Sentry\Users\WrongPasswordException AS WrongPasswordException,
    Cartalyst\Sentry\Users\UserNotFoundException AS UserNotFoundException,
    Cartalyst\Sentry\Users\UserNotActivatedException AS UserNotActivatedException,
    Cartalyst\Sentry\Users\UserSuspendedException AS UserSuspendedException,
    Cartalyst\Sentry\Users\UserBannedException AS UserBannedException;

class AuthenticationService
{

    private $error;

    public function __construct(Sentry $sentry)
    {
        $this->sentry = $sentry;
    }

    public function getError()
    {
        return $this->error;
    }

    public function authenticate($credentials, $remember = true)
    {
        try {
            return $this->sentry->authenticate($credentials, $remember);
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
    }

}
