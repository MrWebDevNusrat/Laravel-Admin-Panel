<?php
/**
 * Customer
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Customer'], function () {
        Route::resource('customers', 'CustomersController');
        //For Datatable
        Route::post('customers/get', 'CustomersTableController')->name('customers.get');
    });
    
});