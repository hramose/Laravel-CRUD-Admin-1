<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;


class PostController extends Controller
{
	public function showAll()
	{
		$posts = Post::paginate(12);
		return view('frontend.list', ['posts' => $posts]);
	}
	public function showDetail($id)
	{
		$post = Post::where('id', $id)->first();
		return view('frontend.detail', ['post' => $post]);
	}
}
