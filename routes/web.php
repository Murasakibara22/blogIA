<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetDataController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::view('register', 'Auth.register');


Route::group(['prefix' => '/dashboard' , 'middleware' => 'auth' , 'middleware' => 'typeusers'], function(){
    
    Route::group([ 'middleware' => 'verified'], function() {
   
        Route::get('/', [GetDataController::class , 'index_home']);

        Route::view('/utilisateurs/new', 'pages.userAdd')->middleware('password.confirm');
        
        Route::view('/utilisateurs/liste', 'pages.userList');

        Route::view('/intelligence_artificielle/all', 'pages.IA')->middleware('password.confirm');
        
    });
});

Route::get('/logout', function () {
    auth()->logout();

    return redirect('/');
});