<?php

use App\Http\Controllers\GreetingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/info', function () {
    return response()->json([
        'email' => 'adewolenoah3@gmail.com',
        'current_datetime' => now()->toIso8601String(),
        'github_url' => 'https://github.com/adetola-dotbat'
    ], 200);
});
