<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use \Input;
use App\Link;

class LinksController extends Controller
{
	public function show()
    {
    	$link = Link::findOrFail($id);
    	return redirect($link->url, 301);
    }

    public function create()
    {
    	return view('links.create');
    }

    public function store()
    {
    	$url = Input::get('url');

    	$link = Link::firstOrCreate(['url'=>$url]);

    	/* Equivaut à :
    	$link= Link::where('url', $url)->first();

    	if(!$link){
    		$link = Link::create(['url' => $url]);
    	}
    	
		*/
		
    	return view('links.success', compact('link'));
    }
}
