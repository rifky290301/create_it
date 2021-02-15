<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\JenisProyekController;
use App\Models\Feedback;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::namespace('Notes')->group(function () {

// Route::prefix('notes')->group(function () {
//   Route::post('create-new-note', [NoteController::class, 'store']);
//   // allNotes
//   Route::get('', [NoteController::class, 'index']);
//   // show
//   Route::get('{note:slug}', [NoteController::class, 'show'])->name('notes.show');
//   // edit
//   Route::patch('{note:slug}/edit', [NoteController::class, 'update']);
//   // delete
//   Route::delete('{note:slug}/delete', [NoteController::class, 'destroy']);
// });

// Route::post('login', function () {
//   $credentials = request()->only('email', 'password');

//   if (auth()->once($credentials)) {
//     return auth()->user();
//   }

//   return 'fail';
// });

Route::prefix('subject')->group(function () {
  Route::get('', [SubjectController::class, 'index']);
});

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
