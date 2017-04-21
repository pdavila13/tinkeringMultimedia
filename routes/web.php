<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('video', function ()    {
        $data = [];
        return view('video',$data);
    })->name('video');

    Route::get('d3demo', function ()    {
        $data = [];
        return view('d3demo',$data);
    })->name('d3demo');

    Route::get('svg', function ()    {
        $data = [];
        return view('svg',$data);
    })->name('svg');

    Route::get('CanvasClock', function ()    {
        $data = [];
        return view('CanvasClock',$data);
    })->name('CanvasClock');

});
