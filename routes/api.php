<?php

use App\Http\Controllers\Api\ArtworkController;
use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json([
        'success' => true,
        'message' => 'Detail logged in user',
        'data' => $request->user(),
    ]);
});

Route::resource('category', CategoryController::class)->only(['index', 'show']);
Route::resource('artwork', ArtworkController::class)->only(['index', 'show']);


require __DIR__ . '/auth.php';
