<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

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
Route::get('/student', 'App\Http\Controllers\StudentId@show');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/student', function () {
return view('student');
})->name('student');
Route::get('/home', function () {
return 'home';
});
Route::get('student/add', function(){
DB::table('students')->insert([
    'name' => 'Kosov',
    'surname' => 'Andrey',
    'age' => 30
]);
});
Route::get('student/create', function() {
    return view('student');
});

 Route::post('student/create', [StudentId::class, 'store'])->name('add-student');
Route::get('student/{id}', [StudentId::class, 'stud_id']);

