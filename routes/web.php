<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;


// Route::get('/{any?}', function () {
//     return view('app');
// })->where('any', '.*');


Route::view('/{any}', 'app')->where('any', '.*');

// Route::prefix("auth")->group(function () {
//   Route::get("init", [AppController::class, 'init']);
//   Route::post("login", [AppController::class, 'login']);
//   Route::post("register", [AppController::class, 'register']);
//   Route::post("logout", [AppController::class, 'logout']);
// });
