<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;

class PostsController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(Guard $auth){
    	$posts = $auth->user()->posts()->select('title')->get();
    	return view('admin.posts.index', compact('posts'));
    }
}
