<?php

use Illuminate\Support\Facades\Route;
use App\Models;

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
    $b = $a::where('id', '>', 10)->where('id', '<', 13)->get();

    foreach ($b as $key) {
        var_dump($key->MyTime);
    }

});


Route::get('/set_data/{text}/{int}', function ($text, $int) {
   $a = new App\Models\MyModel();

    $c = $a->where('MyInt', $int)->get();
    if(count($c)) {
        echo 'die';
        die();
    };



   echo $a->insert([
      'myText' => $text,
      'MyInt' => $int
   ]);

   echo '<br>';

   $b = $a->where('myText', $text)->where('MyInt', $int)->get();

   foreach ($b as $value) {
       var_dump($value->id);
   }

});

Route::any('/test', function (Request $request) {
    $model = new Models\MyModel();

    $result = $model->find(1);





   foreach ($result->get_user_role as $v) {
       var_dump( $v->role_name);
   };

//    dd($result->get_user_role_id->user_role);


});

Route::get('/midl/{var}', [\App\Http\Controllers\MyTest::class, 'test']);





