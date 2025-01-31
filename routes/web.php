<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return response()->json([
        'email' => 'adewolenoah3@gmail.com',
        'current_datetime' => now()->utc()->format('Y-m-d\TH:i:s\Z'),
        'github_url' => "https://github.com/adetola-dotbat"
    ], 200);
});
