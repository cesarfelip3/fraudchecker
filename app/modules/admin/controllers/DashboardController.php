<?php

namespace App\Modules\Admin\Controllers;

use Auth,
    Input,
    Redirect,
    View,
    Config,
    Cartalyst\Sentry\Sentry as Sentry;

/**
 * Dashboard controller
 * @author Santosh Moktan <itmyprofession@gmail.com>
 */
class DashboardController extends \BaseController
{

    public function __construct()
    {
        $this->beforeFilter('inGroup:Administrators', array('only' => array('indexAction')));
        //array('except' => array('create', 'store', 'activate', 'resend', 'forgot', 'reset')));
    }

    /**
     * Display Dashboard
     * 
     * @return View
     */
    public function indexAction()
    {
        return View::make('admin::dashboard');
    }

}
