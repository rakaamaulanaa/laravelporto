<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;




// Dashboard Admin
Route::prefix('admin')->group(function () {
    Route::get('about', [AboutController::class, 'index'])->name('about.index');
    Route::get('about/edit', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('about/update', [AboutController::class, 'update'])->name('about.update');

    Route::resource('skills', SkillController::class)->except(['show']);
    Route::resource('education', EducationController::class)->except(['show']);
    Route::resource('projects', ProjectController::class)->except(['show']);
});

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
