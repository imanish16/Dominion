<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;

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

// Route::post('/loginapi', function (Request $request) {
//     $credentials = $request->only('email', 'password');

//     if (Auth::attempt($credentials)) {
//         $user = Auth::user();
//         $token = $user->createToken('API Token')->plainTextToken;

//         return response()->json(['token' => $token]);
//     }

//     return response()->json(['error' => 'Unauthorized'], 401);
// });


Route::middleware(['auth:sanctum'])->group(function(){
        Route::get('/user',[UsersController::class, 'getUsers'])->name('user.list');

    // Route::get('/user', function (Request $request) {
    //         $user = $request->user();
    //     return response()->json($user);
    // });
});