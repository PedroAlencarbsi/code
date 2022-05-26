<?php

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

Route::get('/', function () {

$name = "pedro";
$age = "21";

$arr = [1,2,3,4,5];

    return view('welcome',
        [
            'name' => $name, 
            'age' => $age, 
            'profissao' => "programador",
            'arr' => $arr
        ]
    );
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});