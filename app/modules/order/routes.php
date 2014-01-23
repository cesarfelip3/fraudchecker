<?php

Route::group(array('before' => 'auth'), function() {
    Route::get('admin/order', array('as' => 'admin.order', 'uses' => 'App\Modules\Order\Controllers\OrderController@indexAction'));
});
