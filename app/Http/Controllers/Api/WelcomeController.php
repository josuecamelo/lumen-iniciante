<?php
/**
 * Created by PhpStorm.
 * User: JCamelo
 * Date: 20/04/2018
 * Time: 22:40
 */

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        $name = 'Josué';
        return view('welcome', ['n'=>$name]);
    }
}