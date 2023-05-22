<?php

use App\Http\Controllers\DemoController;
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
Route::get('/',function(){
    return view('welcome');
});

Route::post('/userinfo',[DemoController::class,'userInfo']);

Route::post('/useragent',[DemoController::class,'userAgent']);

Route::get('/query',[DemoController::class,'apiEndpoint']);

Route::post('/upload',[DemoController::class,'fileUploads']);

Route::post('/setcookie',[DemoController::class,'setCookie']);

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.',
    ]);
});
