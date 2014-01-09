<?php

namespace Fraudchecker\Authentication;

use Cartalyst\Sentry\Sentry;

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
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
            $this->error = 'Login field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
            $this->error = 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
            $this->error = 'Either email or password is wrong.';
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            $this->error = 'User was not found.';
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
            $this->error = 'User is not activated.';
        }
    }

}
