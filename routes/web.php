<?php

use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;

Route::statamic('search', 'search');

Route::get('test', function() {
    $entries = Entry::query()->where('collection', 'news')->get();
    return view('test', ['entries' => $entries]);
});

