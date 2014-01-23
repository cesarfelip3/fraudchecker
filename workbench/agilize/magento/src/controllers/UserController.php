<?php

namespace Agilize\Magento;

use \Controller;
use \App;

class UserController extends Controller
{

    public function getUser($id)
    {
        $user = User::find($id);
        if ($user) {
            return $user;
        }
        else {
            App::abort(404);
        }
    }

}
