<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('home-one', [SiteController::class, 'homeOne'])->name('home-one');
Route::get('home-two', [SiteController::class, 'homeTwo'])->name('home-two');
Route::get('home-three', [SiteController::class, 'homeThree'])->name('home-three');
Route::get('home-dark', [SiteController::class, 'homeDark'])->name('home-dark');
Route::get('air-freight', [SiteController::class, 'airFreight'])->name('air-freight');
Route::get('road-freight', [SiteController::class, 'roadFreight'])->name('road-freight');
Route::get('about', [SiteController::class, 'about'])->name('about');
Route::get('service', [SiteController::class, 'service'])->name('service');
Route::get('service-details', [SiteController::class, 'serviceDetails'])->name('service-details');
Route::get('team', [SiteController::class, 'team'])->name('team');
Route::get('team-details', [SiteController::class, 'teamDetails'])->name('team-details');
Route::get('project', [SiteController::class, 'project'])->name('project');
Route::get('project-details', [SiteController::class, 'projectDetails'])->name('project-details');
Route::get('faq', [SiteController::class, 'faq'])->name('faq');
Route::get('404', [SiteController::class, 'notFound'])->name('notFound');
Route::get('blog', [SiteController::class, 'blog'])->name('blog');
Route::get('blog-details', [SiteController::class, 'blogDetails'])->name('blog-details');
Route::get('contact', [SiteController::class, 'contact'])->name('contact');