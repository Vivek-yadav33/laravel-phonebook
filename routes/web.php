<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ContactsController;

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::get('contact', function () {
    return view('contacts.create');
})->name('contact');

Route::post('/login/user',[AuthController::class,'login'])->name('login.user');

Route::get('/register',[AuthController::class,'index'])->name('register.index');
Route::post('/register',[AuthController::class,'store'])->name('register.store');

//SessionCOntroller class method route created..

Route::post('/login',[SessionController::class,'store'])->name('login.store');
Route::get('/login',[SessionController::class,'index'])->name('login.index');
Route::delete('/logout',[SessionController::class,'destroy'])->name('logout.destroy');

//ContactsCOntroller class method route created..

Route::get('/contacts/edit/{id}',[ContactsController::class,'edit'])->name('contacts.edit');
Route::get('/contacts',[ContactsCOntroller::class,'index'])->name('contacts.index');
Route::get('/contacts/show/{id}',[ContactsController::class,'show'])->name('contacts.show');
Route::get('/contacts/create',[ContactsController::class,'create'])->name('contacts.create');
Route::post('/contacts',[ContactsController::class,'store'])->name('contacts.store');
Route::get('/contacts/delete/{id}',[ContactsController::class,'delete'])->name('contacts.delete');
Route::post('/contacts/update/{id}',[ContactsController::class,'update'])->name('contacts.update');





