<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn() => view('home'))->name('home');
    Route::get('/docs', fn() => view('docs'))->name('docs');
    Route::get('/docs_toggle', fn() => view('docs_toggle'))->name('docs.toggle');
    // Route::get('/blogs', fn() => view('blogs', ['mk_source' => "# Teste\n\nTexto aqui\n\n## Subtitulo \n\n \"'testeo sub titulo' exemplo "]))->name('blogs');
    Route::get('/blogs', [BlogController::class, 'show'])->name('blogs');

    Route::prefix('/user')->group(function () {
        Route::get('/{user}', [UserController::class, 'show'])->name('user.show');

        Route::get('/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
        Route::get('', App\Http\Controllers\UserController::class)->name('users');

        Route::post('/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

    });
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});
