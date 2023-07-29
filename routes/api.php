<?php

use App\Http\Controllers\BookingsController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// default of 5 recent bookings
Route::get('/getRecentBookings', [BookingsController::class, 'index']);
// result of 5 paginated bookings
Route::get('/getBookingsPage', [BookingsController::class, 'paginatedResult']);

