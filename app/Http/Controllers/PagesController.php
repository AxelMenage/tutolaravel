<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
    	$title = "A propos";
    	$numbers=[1,2,3,4,5,6,7,8,9];

    	// Retourne un tableau associatif
    	return view('pages/about', compact('title', 'numbers'));
    	// Equivaut à :
    	// return view('pages/about', ['title' => $title, 'numbers' => $numbers]);
    }
}
