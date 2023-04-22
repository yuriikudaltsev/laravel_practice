<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index() 
    {
        DB::select("SELECT * FROM posts");
        
//        dump($_ENV['DB_DATABASE']);
//        dump($_ENV);
//        dump(config('broadcasting.connections.ably.driver'));
        return view('home', ['res' => 54, 'name'=> 'MMM']);
    }

    public function test() 
    {
      return __METHOD__;   
    }
    
}

?>
