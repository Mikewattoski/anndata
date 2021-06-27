<?php

use Illuminate\Support\Facades\Route;
use App\Models\state;
// use Auth;

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
Auth::routes(['reset' => false, 'verify' => false,'register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/registration', function(){
    $state=state::all();
    // dd($state);
    return view('auth.register')->with('state',$state);
})->name('registeration');
Route::post('/registeration2',[App\Http\Controllers\Auth\RegisterController::class, 'registeruser'])->name('registeruser');
Route::get('profile', function () {
    return 1;
})->name('profile');
Route::prefix('farmer')->group(function(){
    // Route::get('/','dashboardcontroller@index');
    Route::resource('/profile','App\Http\Controllers\FarmerprofileController');
     Route::resource('/stock','App\Http\Controllers\Stockcontroller');
     Route::get('/order','App\Http\Controllers\OrderController@orderview')->name('kk');
     // Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
    // Route::get('/pending/{id}','OrderController@pending')->name('order.pending');
    // Route::resource('/users','UserController');
    });
    Route::get('farmer/order/{id}','App\Http\Controllers\OrderController@orderconfirm');
    
Route::prefix('company')->group(function(){
        // Route::get('/','dashboardcontroller@index');
        Route::resource('/profile','App\Http\Controllers\CompanyprofileController');
        Route::resource('/order','App\Http\Controllers\Ordercontroller');
        
        // Route::resource('/order','OrderController');
        Route::get('/ordered/{id}','App\Http\Controllers\OrderController@order')->name('order.confirm');
        // Route::get('/pending/{id}','OrderController@pending')->name('order.pending');
        // Route::resource('/users','UserController');
        });
            

