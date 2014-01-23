<?php

namespace App\Modules\Order\Controllers;

use Auth;
use Input;
use Redirect;
use View;
use Config;
use Cartalyst\Sentry\Sentry as Sentry;

/**
 * OrderController
 * @author Santosh Moktan <itmyprofession@gmail.com>
 */
class OrderController extends \BaseController
{

    public function __construct()
    {
        $this->beforeFilter('inGroup:Administrators', array('only' => array('indexAction')));
    }

    /**
     * Display Dashboard
     * 
     * @return View
     */
    public function indexAction()
    {
        return View::make('order::index');
    }

}
