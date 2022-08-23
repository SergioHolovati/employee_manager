<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ColaboradorController;

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
Route::get("colaborador", function ()
{
return ColaboradorController::getAll();
});
/* Route::controller(ColaboradorController::class)->group(function(){
    Route::get('colaborador', 'getAll');
    Route::post('colaborador/import', 'import')->name('colaborador/import');
}); */
 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
