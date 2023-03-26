<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index() 
    {
        dump($_ENV['DB_DATABASE']);
        dump($_ENV);
        dump(config('broadcasting.connections.ably.driver'));
        return view('home', ['res' => 54, 'name'=> 'MMM']);
    }

    public function test() 
    {
      return __METHOD__;   
    }
    
}

?>
