<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;

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
    return view('unlogined');
});
Route::get('/info', function () {
    return view('phpinfo');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/', [TicketController::class,'index'])->middleware(['auth'])->name('ticketAll');

Route::get('/ticketAll', [TicketController::class,'index'])->middleware(['auth'])->name('ticketAll');

Route::get('/user/userAll', [UserController::class,'userAll'])->name('user.userAll');
//urlって変えたほうがいいかな
// Route::get('/user/userAll', [UserController::class,'userAll'])->name('user.userAll');
// Route::get('/user/userAllAdmin', [UserController::class,'userAll'])->name('user.userAllAdmin');

// Route::get('/user/{user}/userAllUpdate', [UserController::class,'userAllUpdate'])->name('user.userAllUpdate')
// ->where('user','[0-9]+');

// Route::post('/user/{user}/userAllUpdate', [UserController::class,'userAllUpdate'])->name('user.userAllUpdate')
// ->where('user','[0-9]+');
Route::PATCH('/user/{user}/userAllUpdate', [UserController::class,'userAllUpdate'])->name('user.userAllUpdate')
->where('user','[0-9]+');
// Route::PATCH('/user/{user}/userAllUpdate', [UserController::class,'userAllUpdate'])->name('user.userAllUpdate')
// ->where('user','[0-9]+');


Route::delete('/user/{user}/userDestroy', [UserController::class,'userDestroy'])->name('user.userDestroy')
->where('user','[0-9]+');

// Route::patch('/user/userAllUpdate', [UserController::class,'userAllUpdate'])->name('user.userAllUpdate');

Route::get('/user/userEdit', [UserController::class,'edit'])->name('user.edit');


Route::PATCH('/user/{user}/update', [UserController::class,'update'])->name('user.update')
->where('user','[0-9]+');

// Route::PATCH('/user/update', [UserController::class,'update'])->name('user.update');



//管理者編集と個別編集で分けるときに上手く分かれない
