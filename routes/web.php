<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SlackController;
use App\Http\Controllers\MailController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// ホーム画面の処理
Route::group(['prefix' => 'home', 'as' => 'home'], function () {
    // home
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', [HomeController::class, 'show'])->name('');
        Route::get('index', [HomeController::class, 'index'])->name('.index');
        Route::get('showEdit/{id}', [HomeController::class, 'showEdit'])->name('.showEdit');
        Route::post('entry', [HomeController::class, 'entry'])->name('.entry');
        Route::get('delete/{id}', [HomeController::class, 'delete'])->name('.delete');
    });
});

// slack
Route::group(['prefix' => 'slack', 'as' => 'slack'], function () {
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', [SlackController::class, 'show'])->name('');
        Route::post('sendSlackNotification', [SlackController::class, 'sendSlackNotification'])->name('.sendSlackNotification');
    });
}); 

// mail
Route::group(['prefix' => 'mail', 'as' => 'mail'], function () {
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/', [MailController::class, 'show'])->name('');
        Route::post('emailSend', [MailController::class, 'emailSend'])->name('.emailSend');
    });
}); 
