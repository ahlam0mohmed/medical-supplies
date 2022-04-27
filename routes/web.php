<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GovernorateController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
//

Auth::routes(['verify' => true]);
define('PAGINATION', 10);

Route::group(['middleware' => 'auth'], function () {

    ////////////////////////////////////

    Route::group(['prefix' => 'pharmacy'], function () {
        Route::get('/create', [PharmacyController::class, 'create'])->name('pharmacy.create');
        Route::post('/store', [PharmacyController::class, 'store'])->name('admin.pharmacy.store');
        Route::get('/edit/{id}', [PharmacyController::class, 'edit'])->name('admin.pharmacy.edit');
        Route::post('/update/{id}', [PharmacyController::class, 'update'])->name('admin.pharmacy.update');
        Route::get('/active/{id}', [PharmacyController::class, 'active'])->name('admin.pharmacy.active');
        Route::get('/disActive/{id}', [PharmacyController::class, 'disActive'])->name('admin.pharmacy.disActive');
    });

    ///////////////////////////////////////




    Route::get('/', [PharmacyController::class, 'index'])->name('admin.pharmacy.index');
    
    Route::post('/changePassword', [UserController::class, 'changePassword'])->name('changePassword.user');

    Route::group(['prefix' => 'dashboard', 'middleware' => 'checkType:admin'], function () {





        // crud USers
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
            Route::get('/{id}', [UserProfileController::class, 'show'])->name('show.profile');
            Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
            Route::post('/store', [UserController::class, 'store'])->name('admin.users.store');
        }); // end users

        Route::get('/', function () {
        return view('home');
        })->name('dashboard');

        // crud city
        Route::resource('city', CityController::class)->except('show');
        
        //  crud governorate
        Route::resource('governorate', GovernorateController::class)->except('show');
        
        // crud pharmacy contact
        Route::resource('contact', ContactController::class)->except('show');
        
        Route::group(['prefix' => 'pharmacy', 'middleware' => ['checkType:pharmacy','active']], function () {

        
    });







});
Route::group(['prefix' => 'profile'], function () {
    Route::get('index', [UserProfileController::class, 'show'])->name('index.profile');
    Route::get('edit', [UserProfileController::class, 'edit'])->name('edit.profile');
    Route::post('update', [UserProfileController::class, 'update'])->name('update.profile');
});
});


Route::get('/', function () {
    return view('index');
});
Route::get('/l', function () {
    return view('registerAsPhar');
});

Route::get('/profile', function () {
    return view('user.profile');
})->name('pharmacies');

Route::get('/re1', function () {
    return view('order');
});

Route::get('/re2', function () {
    return view('registerAsPhar');
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('verified')->name('home');
