<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index($name){
        return 'Hello ' . $name;
    }
}
