<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\Auth;


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

// Laravelトップページのルーティング
// Route::get('/', function () {
//     return view('welcome');
// });

// Laravel８.０以前の記述法
// Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

// Laravel８.０以降の記述法
// Auth::routes();

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/mypage/{id}/costs', 'CostController@index')->name('costs.index');
Route::get('/mypage/{id}/costs', 'CostController@index')->name('costs.index');
// Route::get('/fmyoage/{id}/cost',  [CostController::class, 'index'])->name('costs.index');

// Route::get('/register', [RegisterController::class, 'index'])->name('register');

// Route::get('/folders/{id}/tasks',  [TaskController::class, 'index'])->name('tasks.index');
// Route::get('/folders/{id}/tasks/create', [TaskController::class, 'showCreateForm'])->name('tasks.create');
// Route::get('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'showEditForm'])->name('tasks.edit');
// Route::get('/folders/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
// Route::post('/folders/{id}/tasks/{task_id}/edit', [TaskController::class, 'edit']);
// Route::post('/folders/create', [FolderController::class, 'create']);
// Route::post('/folders/{id}/tasks/create', [TaskController::class, 'create']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

