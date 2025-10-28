<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware('auth')->group(function (): void {
    Route::get('/', [App\Http\Controllers\PageController::class, 'home'])->name('home');
});
