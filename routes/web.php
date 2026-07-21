<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'showwelcome']);
// Route::get('/', function () {
//     return view('welcome');
// });

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