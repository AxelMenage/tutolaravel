<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
	public function index(){
		$posts = Post::get();
		view('posts.index', compact('posts'));
	}

	public function store(){
		
	}
    
}
