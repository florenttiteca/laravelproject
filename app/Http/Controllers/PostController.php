<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Contracts\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller {

	public function index() {
		$posts = Post::paginate(5);

		return view('posts.index', compact("posts"));
	}

	public function create() {
		$post = new Post();
		return view('posts.edit', compact("post"))->with(['success' => 'Création OK']);
	}

	public function store() {
		$post = Post::create(Input::all());
		return view('posts.edit', compact("post"));
	}

	public function show($slug) {
		$post = Post::where('slug', $slug)->firstOrFail();

		return view('posts.view', compact("post"));
	}

	public function edit($id) {
		$post = Post::findOrFail($id);

		return view('posts.edit', compact("post"));
	}

	public function update($id) {
		$post = Post::findOrFail($id);
		$post->update(Input::all());
		return Redirect::back()->with(['success' => 'Mise à jour OK']);
	}

	public function delete($id) {
		$post = Post::destroy($id);
		return Redirect::back()->with(['success' => 'Suppression OK']);
	}
}
