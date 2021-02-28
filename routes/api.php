<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\JenisProyekController;
use App\Models\Feedback;

Route::get('jenis_proyek', [JenisProyekController::class, 'index']);

Route::prefix('projects')->group(function () {
  Route::post('create', [ProjectController::class, 'store']);
  Route::get('read', [ProjectController::class, 'read']);
  Route::delete('{project:id}/delete', [ProjectController::class, 'destroy']);

  Route::get('{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
});

Route::prefix('feedback')->group(function () {
  Route::post('create', [FeedbackController::class, 'store']);
  Route::get('read', [FeedbackController::class, 'read']);
  Route::delete('{feedback:pesan}/delete', [FeedbackController::class, 'destroy']);
});


Route::prefix("auth")->group(function () {
  Route::get("init", [AuthController::class, 'init']);
  // Route::get("login", [AuthController::class, 'login']);
  // Route::get("register", [AuthController::class, 'register']);
  // Route::get("logout", [AuthController::class, 'logout']);
});
