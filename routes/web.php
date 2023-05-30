<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControllers;

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


Route::get('/', function () {
    return view('Index');
});


Route::get('/new-order', function () {
    return view('NewOrder');
});


// Route::middleware(['Admin'])->group(function () {
    Route::controller(AdminControllers::class)->group(function () {
        Route::get('/admin','Dashboard');
        Route::get('/admin/profile','Profile');
        Route::get('/admin/profile/Update','Update');
        Route::get('/admin/customers','Users');
        Route::get('/admin/user/{Id}/update','UpdateUser');
        Route::get('/admin/order','Order');
        Route::get('/admin/order/{id}/update','UpdateOrder');
        Route::get('/admin/signOut','SignOut');
    });
// });
