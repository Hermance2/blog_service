<?php

use App\Http\Controllers\blog_service\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/blog')->controller(BlogController::class)->name('blog.')->group(function(){
    Route::get('/','index')->name('list');//list blog
    Route::get('/create','create')->name('.create');
});
