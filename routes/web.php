<?php

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
     return view('welcome');
});

Route::get('/number/{var}/{something}',function($var,$something){
    echo "number is ". $var . ". and " . "counter is " .$something;;
});

Route::get("/home/house/bar/teashop/",array('as'=>'short.com',function(){
    $result = route("short.com");
    echo "$result";
}));

Route::get('/post','App\Http\Controllers\PostsController@index');

Route::get('/do','App\Http\Controllers\DoController@index'); 
