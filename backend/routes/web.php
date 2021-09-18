<?php

use Illuminate\Support\Facades\Route;
// laravel8より使用するコントローラーを記載する必要がある。
use App\Http\Controllers\TaskController;

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

// 旧記載方法　Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index')
// 下記laravel8からの記載方法

Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
