<?php

Route::group(array('before' => 'auth'), function() {
    Route::get('admin/dashboard', array('as' => 'admin.dashboard', 'uses' => 'App\Modules\Admin\Controllers\DashboardController@indexAction'));
});
