<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index() 
    {
        return view('home', ['res' => 54, 'name'=> 'MMM']);
    }

    public function test() 
    {
      return __METHOD__;   
    }
    
}

?>
