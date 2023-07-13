<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', [PermissionController::class,'Permission'])->name('permission-def');;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('events', EventController::class);
    
 });

 Route::get('users/{user}/assign-roles', [RolesController::class, 'assignRoles'])->name('assignRoles');
 Route::post('users/{user}/store-assigned-roles', [RolesController::class, 'storeAssignedRoles'])->name('storeAssignedRoles');
require __DIR__.'/auth.php';
