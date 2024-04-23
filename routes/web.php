<?php

use App\Http\Controllers\PersonController;
use App\Models\Person;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $persons = Person::get();
    return view('welcome',compact('persons'));
})->name('welcome');

Route::get('person/create',[PersonController::class,'create'])->name('person.create');
Route::post('person/store',[PersonController::class,'store'])->name('person.store');
Route::get('person/{id}',[PersonController::class,'view'])->name('person.view');
