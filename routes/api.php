<?php

use App\Http\Controllers\MusicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/{category}', [MusicController::class, 'getRandomMusicByCategory']);

Route::get('/', [MusicController::class, 'getRandomMusic']);

Route::post('/music/add', [MusicController::class, 'addMusic']);

Route::post('/music/delete', [MusicController::class, 'musicDelete']);
