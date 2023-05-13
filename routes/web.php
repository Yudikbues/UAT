<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'index']);

Route::get('/hello', function(){
    echo "Hello World!";
});

Route::get('/hello/{name}', function($name){
    echo "Hello " . $name . "!!";
});

Route::get('calculate/{num1}/{num2}', function($num1, $num2){
    echo $num1 + $num2;
});

Route::get('/home/{name}', [HomeController::class, 'home']);

Route::get('/karyawan', [HomeController::class, 'get_karyawan']);

Route::post('/karyawan/data', [HomeController::class, 'post_karyawan']);

// Route::get('/home/{name}', function ($name){
//     return view('home')->with(compact('name'));
// });

Route::get('/about', function (){
    return view('about');
});

Route::get('/service', function(){
    return view('service');
});

Route::get('/portfolio', function (){
    return view('portfolio');
});

Route::get('/testimonials', function (){
    return view('testimonials');
});

Route::get('/team', function (){
    return view('team');
});

Route::get('/clients', function (){
    return view('clients');
});


Route::get('/blog', function (){
    return view('blog');
});

Route::get('/contact', function (){
    return view('contact');
});


