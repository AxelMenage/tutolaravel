<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditPostRequest;
use App\Post;
use App\Category;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PostsController extends Controller
{
	public function index(){
		//Auth::attempt(['email'=>'test@test.fr', 'password'=>'0000']);
		//dd(Auth::check());
		$posts = Post::with('category')->get();
		return view('posts.index', compact('posts'));
	}

	public function edit($id){
		$post = Post::findOrFail($id);
		$categories=Category::pluck('name','id');
		return view('posts.edit', compact('post', 'categories'));
	}

	public function update($id, EditPostRequest $request){
		$post = Post::findOrfail($id);
		$post->update($request->all());
		//Session::flash('success', "L'article a bien été sauvegardé");
		return redirect(route('news.edit', $id))->with('success', 'L\'article a bien été sauvegardé');
	}

	public function create(){
		$post = new Post();
		$categories=Category::pluck('name','id');
		return view('posts.create', compact('post', 'categories'));
	}

	public function store(Request $request){
		$post = Post::create($request->all());
		return redirect(route('news.edit', $post));
	}

    
}
