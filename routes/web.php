<?php

use App\Http\Controllers\ProjectsController;
use App\Models\Project;
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

//old way
//Route::get('/projects', 'ProjectsController@index');

//old way that works
//Route::get('/projects', 'App\Http\Controllers\ProjectsController@index');

//action syntax
Route::get('/projects', [ProjectsController::class, 'index']);

Route::post('/projects', [ProjectsController::class, 'store']);
