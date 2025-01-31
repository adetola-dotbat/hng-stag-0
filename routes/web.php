<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return response()->json([
        'email' => 'adewolenoah3@gmail.com',
        'current_datetime' => now()->toIso8601String(),
        'github_url' => 'https://github.com/adetola-dotbat'
    ], 200);
});
