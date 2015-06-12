<?php
/**
 * This routes file is located in the tenant directory
 * Any defined routes are natively loaded when one of the hostnames of the tenant website is hit (and identified)
 * You can use whatever route definitions you are used to from the Laravel package
 *
 * 
 * @see http://laravel.com/docs/5.1/routing
 */

Route::any('/', function()
{
    return view('home');
});