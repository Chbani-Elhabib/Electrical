<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });




Route::controller(PublicController::class)->group(function () {
    Route::get('/','index');
    Route::get('/services','Services');
    Route::get('/about','About');
    Route::get('/new-order','NewOrder');
    Route::get('/lange','Lange');
    Route::POST('/logn','logn');
    Route::get('/user/profile','profile');
    Route::get('/user/edit/profile','EditProfile');
    Route::get('/user/edit/password','EditPassword');
    Route::get('/user/orders','Orders');
    Route::get('/user/logout','logout');
});


Route::middleware(['Admin'])->group(function () {
    Route::controller(AdminControllers::class)->group(function () {
        Route::get('/admin','Dashboard');
        Route::get('/admin/profile','Profile');
        Route::get('/admin/profile/edit','edit');
        Route::get('/admin/profile/edit-password','EditPassword');
        Route::get('/admin/customers','Users');
        Route::get('/admin/customer/{id}/edit','UpdateCustomer');
        Route::get('/admin/order','Order');
        Route::get('/admin/order/{id}/edit','EditOrder');
        Route::get('/admin/signout','SignOut');
    });
});


Route::controller(OrderController::class)->group(function () {
    Route::POST('/neworder','store');
    Route::POST('/admin/stor','stor');
    Route::POST('/admin/order/show','show');
    Route::POST('/admin/order/{id}/update','update');
    Route::POST('/admin/order/delete','destroy');
 
});

Route::controller(PeopleController::class)->group(function () {
    Route::POST('/person/store','store');
    Route::POST('/admin/person/store','stor');
    Route::POST('/admin/person/shownumber','showNumber');
    Route::POST('/admin/person/show','show');
    Route::POST('/admin/person/{id}/update','update');
    Route::POST('/admin/profile/update','UpdateProfile');
    Route::POST('/user/profile/update','UpdateProfile');
    Route::POST('/admin/validation/password','ValidationPassword');
    Route::POST('/admin/validation/loginandup','loginandup');
    Route::POST('/admin/profile/password/update','UpdatePassword');
    Route::POST('/user/update/password','UpdatePassword');
    Route::POST('/admin/person/delete','destroy');
 
});