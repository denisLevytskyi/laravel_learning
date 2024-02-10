<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTest extends Controller
{
    public function test (Request $request) {
        $id = $request->var;


        echo $request->var;
    }

    public function __construct (Request $request) {
        $id = $request->var;
        $this->middleware('myMidl:'.$id);
    }
}
