<?php

use App\Http\Controllers\TodoController;
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



    
    
    Route::middleware(['isLogin', 'cekRole:admin'])->group(function () {
        Route::get('/todo/all', [TodoController::class, 'all_user'])->name('todo.all');
    });
    
    Route::middleware(['isLogin', 'cekRole:user'])->group(function () {
        
        Route::prefix('/todo')->group(function () {
            Route::get('/create', [TodoController::class, 'create']);
            Route::post('/store', [TodoController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');
            Route::get('/completed', [TodoController::class, 'completed'])->name('completed');
            Route::patch('/update/{id}', [TodoController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
            Route::patch('/completed/{id}', [TodoController::class,'update_complated'])->name('updateComplated');
            
        });
    });
    
    Route::group(['middleware' => 'isLogin', 'cekRole:admin,user'], function () {
        
        Route::get('/modal', function(){
            return view('pages.dashboard.modal');
        })->name('modal');
        
        Route::prefix('/todo')->group(function () {
            Route::get('/', [TodoController::class, 'todo'])->name('todo.index');
            Route::get('/profile', [TodoController::class, 'profile'])->name('todo.profile');
            Route::get('/profile/edit', [TodoController::class, 'profile_edit'])->name('profile.edit');
            Route::post('profile/store', [TodoController::class, 'profile_store'])->name('store.profile');
           
            
        });
     
      
    });

    Route::middleware('isGuest')->group(function(){
        Route::get('/login', [TodoController::class, 'login']);
        Route::post('/login/auth', [TodoController::class, 'auth'])->name('login.auth');
        Route::get('/register', [TodoController::class, 'register'])->name('register.page');
        Route::post('/register/input', [TodoController::class, 'registerAccount'])->name('register.input');


    });


Route::get('/error', function () {
    return view('pages.error');
});

Route::get('/logout', [TodoController::class, 'logout'])->name('logout');








