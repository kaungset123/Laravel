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

Route::get('/home','App\Http\Controllers\PostsController@index');
Route::get('/about','App\Http\Controllers\PostsController@show');
Route::get('/contact','App\Http\Controllers\PostsController@contact');



Route::get('/do/{username}/{password}','App\Http\Controllers\DoController@test'); 
