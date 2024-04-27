<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\ProductAccessMiddleware;

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

// Route::get('/mickey', function() {
//     return response()->json(['message' => 'pogi mo mickey']);
// });
//1 Routes
Route::apiResource('/products', ProductController::class )->middleware(ProductAccessMiddleware::class);
//1.1
//1.2.1
Route::post('products/upload/local', [ProductController::class, 'uploadImageLocal'])->name('upload.local');
//1.2.1
Route::post('products/upload/public', [ProductController::class, 'uploadImagePublic'])->name('upload.public');

//2 Controllers - nasa controllers lahat
//2.1 Generate a controller named ProductController.



//3 middleware
Route::get('/products', [ProductController::class, 'index'])->withoutMiddleware(ProductAccessMiddleware::class);
Route::get('/products/{id}', [ProductController::class, 'show'])->withoutMiddleware(ProductAccessMiddleware::class);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
