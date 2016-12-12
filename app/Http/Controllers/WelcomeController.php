<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    
    public function __construct()
    {
        
    }

    public function index(){
        return "Salut les gens";
    }

  

    
}
