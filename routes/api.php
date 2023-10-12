<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\CategoryController;

// Route::get('products',[ProductController::class,'index']);
// Route::get('products/{product}',[ProductController::class,'show']);
Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);

########## api auth
Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'device_name' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return $user->createToken($request->device_name)->plainTextToken;
});

########logout
Route::post("/logout", function(Request $request)
{
    $user = Auth::guard('sanctum')->user();
    // dd($user);
    $token = $user->currentAccessToken();
    $token->delete();

    return response("Logged_ out", 200);
});
