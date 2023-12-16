<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

// Route::get('/test',function () {
//     return "welcome to our laravel project";
// });

// Route::get('/test_1/{id}',function ($id) {

//     return "Hello your id is: ".$id ;
    
// });

// Route::get('/test_2/{id?}',function ($id = 0) {

//     return "Hello your id 2 is: ".$id ;
    
// });

// Route::get('users/{id?}', function ($id = 0) {
//     return "Hello your id 3 is: ".$id ;

    
// })-> where(['id' => '[0-9]+']);

// Route::get('users_2/{id?}', function ($id = 0) {
//     return "Hello your id 4 is: ".$id ;

// })->whereNumber('id');

// Route::get('users_3/{id?}', function ($id = null) {
//     return "Hello your id 5 is: ".$id ;

// })->whereAlpha('id');

// Route::get('users_4/{id}/{name}', function ($id, $name) {
//     return "Hello your name is: ".$name ." and your id is ".$id;

// })->where(['id' => '[0-9]+','name' => '[a-zA-Z]+']);

// Route::get('users_5/{name}', function ($name) {
//     return "Hello your id 5 is: ".$name ;

// })->whereIn('name',['koky','mero']);

// Route::prefix('lar')->group(function () {
//     Route::get('car', function () {
//         return "hello";
        
//     });
   
// });

// Route::get('/x/{sas}',function ($sas) {
//     return "App";
// });

// Route::fallback(fn() => redirect('/'));
// Route::fallback(function ()  {
//     return redirect('/');
// });

// Route::get('users', function () {
//     return view('test');
// });

Route::get('/about',function () {
    return view('about');
    
});


Route::get('/contactus',function () {
    return view('contact_us');
    
});

Route::prefix('blog')->group(function () {

    Route::get('/science',function () {
        return view('science');
        
    });

    Route::get('/sports',function () {
        return view('sports');
        
    });

    Route::get('/math',function () {
        return view('math');
        
    });

    Route::get('/medical',function () {
        return view('medical');
        
    });
    
});

Route::get('/login',function () {
    return view('login');
    
});

// Route::post('/logged', function () {
//      return 'You are logged in';
    
// })->name('logged');

// Route::get('controller',[ExampleController::class,'show']);



// ------------------------------------------------------------------

// Task_3
Route::post('/submit', [InformationController::class, 'form_submision'])->name('submit');

// Routs for cars tables
// Route::get('storeCar',[CarController::class,'store']);
Route::get('createCar',[CarController::class,'create'])->name('createCar');
// Route::put('storeCar',[CarController::class,'store'])->name('storeCar');
Route::get('cars',[CarController::class,'index'])->name('cars');
Route::get('updateCar/{id}',[CarController::class,'edit']);
Route::get('showCar/{id}',[CarController::class,'show']);
Route::put('update/{id}',[CarController::class,'update'])->name('update');
Route::post('storeCar',[CarController::class,'store'])->name('storeCar');

// Routes for Posts table
Route::get('createPost',[PostController::class,'create'])->name('createPost');
Route::get('posts',[PostController::class,'index']);
Route::post('storePost',[PostController::class,'store'])->name('storePost');




