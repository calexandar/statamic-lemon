<?php

use Illuminate\Support\Facades\Route;

Route::statamic('/', 'home');
Route::statamic('/blog', 'blog.index');
Route::statamic('/blog/{slug}', 'blog.show');
