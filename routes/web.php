<?php
use Illuminate\Support\Facades\Route;
use App\Models\inbox;

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
//    dd('home');
    return view('home');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [App\Http\Controllers\UsersController::class, 'index'])->name('users');

Route::get('/create', [App\Http\Controllers\UsersController::class, 'index'])->name('users');

Route::get('/journal', [App\Http\Controllers\UsersController::class, 'journal'])->name('journal');

//Edit artwork request (admin)
Route::get('/inbox/store/{id}', [App\Http\Controllers\InboxController::class, 'edit'])->name('inbox.edit');
Route::post('/inbox/update/', [App\Http\Controllers\InboxController::class, 'update'])->name('inbox.update');

//Delete artwork (admin)
Route::get('/inbox/delete/{id}', [App\Http\Controllers\InboxController::class, 'destroy'])->name('inbox.delete');


//View users (admin)
Route::get('/view', [App\Http\Controllers\UsersController::class, 'view'])->name('view');


//Create artwork posts (admin)
Route::get('/message-upload', [App\Http\Controllers\MessageController::class, 'index'])->name('message');
Route::post('/message-upload', [ App\Http\Controllers\MessageController::class, 'store'])->name('message.store');

//inbox gallery
Route::get('/inbox', [App\Http\Controllers\InboxController::class, 'index'])->name('inbox');





