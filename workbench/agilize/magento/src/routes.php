<?php

Route::group(array('prefix' => 'api/v1'), function() {
    Route::get('user/{id}', 'Agilize\Magento\UserController@getUser')
            ->where('id', '[0-9]+');
});
