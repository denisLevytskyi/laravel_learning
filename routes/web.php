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
    return view('welcome');

});
Route::get('/22', function () {
    $a = new \App\Models\MyModel();
    $a->myText=';s;s;s;s;';
    $a->MyTime='';

    $a->save();
    echo 22;
});

Route::get('/23', function () {
    $a = new \App\Models\MyModel();
    $b = $a::all();

    foreach ($b as $key) {
        var_dump($key->id);
    }




});





