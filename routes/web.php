<?php

use App\Http\Controllers\FormValidation;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'showwelcome']);
Route::get('/students',[StudentController::class,'get_students']);
Route::post('/students/add',[StudentController::class,'addUser'])->name('add.student');
Route::get('/students/{id}',[StudentController::class,'singleUser'])->name('update.student');
Route::post('/students/update/{id}',[StudentController::class,'updateUser'])->name('update.students');
Route::get('/students/delete/{id}',[StudentController::class,'deleteUser'])->name('delete.student');
Route::view('addstudent','addStudent')->name('addstudent');
// Route::get('/', function () {
//     return view('welcome');
// });
// validation
Route::get('validation', [FormValidation::class,'validationform']);
Route::post('validation/add', [FormValidation::class,'addUser'])->name('add.validation');

Route::get('/aboutsssss',function(){
 return view('about');
})->name('about');

Route::get('/contact/{id}', function($id){
    // return '<h1> This is contact page from the route</h1>' . $id;    
return view('contact',['id' => $id]);
})->whereIn('id',['movies','songs'])->name('contact');











Route::fallback(function(){
    return '<h1>404 Not Found</h1>';
});